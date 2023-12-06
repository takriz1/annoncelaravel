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

    public $classdetails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->classdetails = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (isset($this->classdetails["state"]) && $this->classdetails["state"] == 'Rejected') {
            return $this->subject('Rejected of Product')
                ->view('mails.mailProductUpdated');
        } else if (isset($this->classdetails["state"]) && $this->classdetails["state"] == 'Accepted') {
            return $this->subject('Accepted of Product')
                ->view('mails.mailProductUpdated');
        } else {
            throw ValidationException::withMessages(['stateName' => 'This value of product state is incorrect']);
        }
    }
}
