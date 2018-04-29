<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pics extends Model
{
  protected $table = 'users_pics';

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
