<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParQ extends Model
{
    protected $table = 'parq_answers';

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
