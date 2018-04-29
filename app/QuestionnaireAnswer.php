<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionnaireAnswer extends Model
{
    protected $table = 'questionnaire_answers';

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
