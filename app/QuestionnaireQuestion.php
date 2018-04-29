<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionnaireQuestion extends Model
{
    protected $table = 'questionnaire_questions';

    public function options()
    {
        return $this->hasMany('App\QuestionnaireOption', 'question_id', 'id');
    }
}
