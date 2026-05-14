<?php
namespace App\Http\Controllers;

use App\Services\ContactInquiryService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request, ContactInquiryService $contactInquiryService)
    {
        $validated = $request->validate([
            'first_name' => 'required|regex:/^[a-zA-Z\s]+$/|min:2|max:50',
            'last_name'  => 'required|regex:/^[a-zA-Z\s]+$/|min:2|max:50',
            'company'    => 'required|string|min:2|max:100',
            'email'      => 'required|email:rfc,dns|max:100',
            'service'    => 'nullable|string',
            'notes'      => 'nullable|string|max:1000',
            'agree'      => 'required|accepted',
            ], [
                'first_name.regex' => 'First name should only contain letters.',
                'last_name.regex'  => 'Last name should only contain letters.',
                'email.email'      => 'Please provide a valid business email address.',
                'agree.accepted'   => 'You must agree to the terms.'
            ]);

        $contactInquiryService->submit($validated, $request);

        return back()->with('success', 'Inquiry sent! Our team will contact you shortly.');
    }
}
