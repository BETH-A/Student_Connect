<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('userId');
            $table->foreign('userId')->references('id')->on('users');
            $table->integer('postal_code');
            $table->text('status')->nullable($value = true);
            $table->text('field_study');
            $table->string('pic')->nullable($value = true);
            $table->text('movie');
            $table->text('music');
            $table->text('sport');
            $table->text('food');
            $table->text('activity');
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
        Schema::dropIfExists('surveys');
    }
}
