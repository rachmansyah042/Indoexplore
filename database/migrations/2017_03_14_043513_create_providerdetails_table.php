<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providerdetails', function (Blueprint $table) {
          $table->increments('id_travel');
          $table->integer('id')->unsigned();
          $table->string('name_travel');
          $table->string('ktp');
          $table->string('photo');
          $table->string('slogan');
          $table->string('deskripsi');
          $table->string('contact_phone', 20);
          $table->double('rate')->nullable();
          $table->integer('savings')->nullable();
          $table->timestamps();

          $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providerdetails');
    }
}
