<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('stripe_key_public')->nullable();
            $table->mediumText('stripe_key_secret')->nullable();
            $table->mediumText('freshStart_users_limit')->nullable();
            $table->integer('freshStart_price')->unsigned()->nullable();
            $table->boolean('acceptingStarters', 1)->default(false);
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
        Schema::dropIfExists('settings');
    }
}
