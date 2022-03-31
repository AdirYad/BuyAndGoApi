<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public array $contact;

    public function __construct(array $contact)
    {
        $this->contact = $contact;
    }

    public function via(): array
    {
        return ['mail'];
    }

    public function toMail(): MailMessage
    {
        $message = $this->contact['message'] ?? null;

        return (new MailMessage)
            ->subject("ליד חדש עבור {$this->contact['name']}")
            ->greeting('התקבל ליד חדש!')
            ->line("שם: {$this->contact['name']}")
            ->line("טלפון: {$this->contact['phone']}")
            ->line("הודעה: {$message}");
    }
}
