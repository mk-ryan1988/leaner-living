<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ParqResponse extends Mailable
{
    use Queueable, SerializesModels;

    /**
    * The user and role instance.
    *
    * @var mailData
    */
    public $mailData;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
      $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        return $this->from('freshBot@leaner-living.com')
            ->subject('PAR-Q Response: ' . $this->mailData['email'])
            ->view('emails.parqResponse');
    }
}
