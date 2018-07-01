<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class payment extends Mailable
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

    return $this->from('fresh-start@leaner-living.com')
    ->view('emails.payment_confirm');
  }
}
