<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VacancyApply extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailContent, $attachment)
    {
        //
        $this->emailContent = $emailContent;
        $this->attachment = $attachment;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = [];
        $email = $this->from($this->emailContent['email'], $this->emailContent['name'])
            ->view('frontend.mail.vacancyapply')
            ->subject($this->emailContent['message'])
            ->with($this->emailContent);

        if(!empty($this->attachment)) {
            foreach($this->attachment as $attachment) {
                $email->attach(public_path('uploads/vacancy/'.$attachment['file']));
            }
        }
        return $email;

    }
}
