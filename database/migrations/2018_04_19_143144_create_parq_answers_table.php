<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParqAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parq_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name', 100);
            $table->string('dob', 10);
            $table->string('gender', 6);
            $table->boolean('q1');
            $table->mediumText('q1_more')->nullable();
            $table->boolean('q2');
            $table->mediumText('q2_more')->nullable();
            $table->boolean('q3');
            $table->mediumText('q3_more')->nullable();
            $table->boolean('q4');
            $table->mediumText('q4_more')->nullable();
            $table->boolean('q5');
            $table->mediumText('q5_more')->nullable();
            $table->boolean('q6');
            $table->mediumText('q6_more')->nullable();
            $table->boolean('q7');
            $table->mediumText('q7_more')->nullable();
            $table->boolean('q8');
            $table->mediumText('q8_more')->nullable();
            $table->boolean('q9');
            $table->mediumText('q9_more')->nullable();
            $table->boolean('q10');
            $table->mediumText('q10_more')->nullable();
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
        Schema::dropIfExists('parq_answers');
    }
}
