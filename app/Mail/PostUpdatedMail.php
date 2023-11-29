<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Validation\ValidationException;

class PostUpdatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (isset($this->details["state"]) && $this->details["state"] == 'Rejected') {
            return $this->subject('Rejected of Product')
                ->view('mails.mailProductUpdated');
        } else if (isset($this->details["state"]) && $this->details["state"] == 'Accepted') {
            return $this->subject('Accepted of Product')
                ->view('mails.mailProductUpdated');
        } else {
            throw ValidationException::withMessages(['stateName' => 'This value of product state is incorrect']);
        }
    }
}
