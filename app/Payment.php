<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  protected $table = 'user_payments';

  protected $dates = [
      'commence_at'
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

}
