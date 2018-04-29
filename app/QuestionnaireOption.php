<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionnaireOption extends Model
{
    protected $table = 'questionnaire_options';

    public function question()
    {
        return $this->belongsTo('App\QuestionnaireQuestion');
    }

}
