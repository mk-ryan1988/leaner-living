<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = ['stripe_public_key', 'stripe_secret_key', 'freshStart_users_limit', 'freshStart_price'];
}
