<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
          $table->increments('id_review');
          $table->integer('id_trip')->unsigned();
          $table->integer('id')->unsigned();
          $table->text('content');
          $table->double('rate');
          $table->timestamps();

          $table->foreign('id')->references('id')->on('users');
          $table->foreign('id_trip')->references('id_trip')->on('trips');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
