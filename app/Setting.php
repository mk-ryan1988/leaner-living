<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = ['stripe_public_key', 'stripe_secret_key', 'freshStart_users_limit', 'freshStart_price'];

    /**
     * Scope a query to only include the price field.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDisplayable($query)
    {
      return $query->where('id', 1)->select('freshStart_users_limit', 'freshStart_price', 'acceptingStarters')->first();
    }
    /**
     * Scope a query to only include the price field.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAll($query)
    {
      return $query->where('id', 1)->first();
    }
}
