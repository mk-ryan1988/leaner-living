<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $table = 'users_stats';

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
