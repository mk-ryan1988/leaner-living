<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnaireQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaire_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 10);
            $table->string('classes', 100);
            $table->tinyInteger('section', 4);
            $table->string('name', 10);
            $table->string('title', 180);
            $table->boolean('other')->default(false);
            $table->boolean('more')->default(false);
            $table->string('version', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionnaire_questions');
    }
}
