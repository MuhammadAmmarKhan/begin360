<?php
namespace App\Mail;

use App\Models\ContactInquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BusinessInquiry extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ContactInquiry $inquiry)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [
                new Address($this->inquiry->email, $this->inquiry->full_name),
            ],
            subject: 'New Begin360 Inquiry: ' . $this->inquiry->company,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.inquiry',
        );
    }
}
