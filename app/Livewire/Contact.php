<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public string $name    = '';
    public string $email   = '';
    public string $subject = '';
    public string $message = '';
    public bool   $agreed  = false;  // ← Terms & Conditions checkbox

    public bool $success = false;

    protected array $rules = [
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string|min:10',
        'agreed'  => 'accepted',     // ← must be true (checked) to pass
    ];

    protected array $messages = [
        'agreed.accepted' => 'You must agree to the Terms & Conditions and Privacy Policy before submitting.',
    ];

    public function submit()
    {
        $this->validate();

        try {
            $recipient = config('mail.contact_recipient', env('CONTACT_RECIPIENT_EMAIL'));

            Mail::send('emails.email', [
                'name'        => $this->name,
                'email'       => $this->email,
                'subject'     => $this->subject,
                'bodyMessage' => $this->message,
            ], function ($mail) use ($recipient) {
                $mail->from(config('mail.from.address'), config('mail.from.name'));
                $mail->to($recipient)->subject('New Contact Form Submission');
            });

            $this->reset(['name', 'email', 'subject', 'message', 'agreed']);
            $this->success = true;

        } catch (\Exception $e) {
            \Log::error('Contact Form Error: ' . $e->getMessage());
            $this->addError('form', 'Failed to send your message. Please try again later.');
        }
    }

    public function render()
    {
        return view('livewire.contact')
            ->layout('layouts.app', [
                'title' => 'Contact Us',
            ]);
    }
}