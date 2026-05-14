<?php

namespace App\Services;

use App\Mail\BusinessInquiry;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactInquiryService
{
    public function submit(array $data, Request $request): ContactInquiry
    {
        $inquiry = ContactInquiry::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'company' => $data['company'],
            'email' => $data['email'],
            'service' => $data['service'] ?? null,
            'notes' => $data['notes'] ?? null,
            'agreed_at' => now(),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        $this->sendNotification($inquiry);

        return $inquiry;
    }

    private function sendNotification(ContactInquiry $inquiry): void
    {
        try {
            Mail::to(config('contact.mail.to'))
                ->send(new BusinessInquiry($inquiry));

            $inquiry->forceFill([
                'mail_sent_at' => now(),
                'mail_error' => null,
            ])->save();
        } catch (Throwable $exception) {
            $inquiry->forceFill([
                'mail_error' => $exception->getMessage(),
            ])->save();

            Log::error('Contact inquiry email failed to send.', [
                'contact_inquiry_id' => $inquiry->id,
                'email' => $inquiry->email,
                'error' => $exception->getMessage(),
            ]);
        }
    }
}
