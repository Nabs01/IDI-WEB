<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MAIL extends Mailable
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
     
        return $this->from('hostidigital361@gmail.com')
        ->subject($this->details['name'])
        ->view('mail.contact-mail')
        ->with([
            'name' => 'Diki Alfarabi Hadi',
            'website' => 'www.malasngoding.com',
        ]);
    }
}
