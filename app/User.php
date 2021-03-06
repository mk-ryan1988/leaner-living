<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admin', 'paid', 'paid_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be always eager loaded.
     *
     * @var array
     */
    protected $with = [
        'stats', 'pics', 'questionnaireAnswers'
    ];

    public function parQ()
    {
      return $this->hasOne('App\ParQ');
    }

    public function questionnaireAnswers()
    {
      return $this->hasMany('App\QuestionnaireAnswer');
    }

    public function stats()
    {
      return $this->hasMany('App\Stats');
    }

    public function pics()
    {
      return $this->hasMany('App\Pics');
    }
    public function payment()
    {
      return $this->hasOne('App\Payment');
    }
    public function payments()
    {
      return $this->hasMany('App\Payment');
    }
}
