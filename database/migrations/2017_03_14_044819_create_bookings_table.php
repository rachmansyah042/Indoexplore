<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id_booking');
            $table->integer('id_trip')->unsigned();
            $table->integer('id')->unsigned();
            $table->integer('number_of_participants');
            $table->string('name_participant');
            $table->integer('age_participant');
            $table->integer('id_status_trip')->unsigned();
            $table->integer('total_payment');
            $table->integer('id_status_payment')->unsigned();
            $table->date('due_date_confirm_payment');
            $table->text('request');
            $table->timestamps();

            $table->foreign('id_trip')->references('id_trip')->on('trips');
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('id_status_trip')->references('id_status_trip')->on('statustrips');
            $table->foreign('id_status_payment')->references('id_status_payment')->on('statuspayments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
