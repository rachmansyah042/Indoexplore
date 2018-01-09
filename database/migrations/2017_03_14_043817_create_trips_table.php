<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id_trip');
            $table->integer('id_travel')->unsigned();
            $table->integer('id_category_trip')->unsigned();
            $table->string('trip_name');
            $table->string('description');
            $table->integer('id_type_trip')->unsigned();
            $table->string('detail_activity',10000);
            $table->string('hours_activity',10000);
            $table->date('start_date');
            $table->date('finish_date');
            $table->integer('days',2);
            $table->integer('nights',2);
            $table->integer('quota');
            $table->double('rate');
            $table->integer('price');
            $table->string('photo');
            $table->string('include_needs');
            $table->string('exclude_needs');
            $table->timestamp('created_at')->nullable();

            $table->foreign('id_travel')->references('id_travel')->on('providerdetails');
            $table->foreign('id_category_trip')->references('id_category_trip')->on('categorytrips');
            $table->foreign('id_type_trip')->references('id_type_trip')->on('typetrips');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
