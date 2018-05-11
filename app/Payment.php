<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  protected $table = 'user_payments';

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
