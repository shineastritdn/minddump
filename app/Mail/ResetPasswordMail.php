<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $token;

    public function __construct(User $user, $token)
    {
        $this->user = $user;
        $this->token = $token;
    }

    public function build()
    {
        return $this->subject('Reset Password MindDump')
                    ->view('emails.reset-password')
                    ->with([
                        'user' => $this->user,
                        'token' => $this->token,
                        'resetUrl' => route('password.reset', $this->token)
                    ]);
    }
} 