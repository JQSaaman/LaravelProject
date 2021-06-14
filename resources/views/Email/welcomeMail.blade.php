<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailInfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailInfo)
    {
        $this->mailInfo = $mailInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Email.welcomeMail')
            ->with('mailInfo', $this->mailInfo);
    }

@component('mail::message')
    {{ $mailInfo['title'] }}

    Congratulations! Your account has been created.

    @component('mail::button', ['url' => $mailInfo['url']])
        Cheers!
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
}
