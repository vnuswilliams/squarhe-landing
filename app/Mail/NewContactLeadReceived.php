<?php

namespace App\Mail;

use App\Models\ContactLead;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewContactLeadReceived extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public ContactLead $lead,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouveau message depuis le formulaire de contact Squarhe',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.new-contact-lead-received',
        );
    }
}
