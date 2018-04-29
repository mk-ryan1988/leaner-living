<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('chest', 10);
            $table->string('waist', 10);
            $table->string('left_leg', 10);
            $table->string('right_leg', 10);
            $table->string('left_arm', 10);
            $table->string('right_arm', 10);
            $table->string('current_weight', 10);
            $table->string('target_weight', 10);
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
        Schema::dropIfExists('users_stats');
    }
}
