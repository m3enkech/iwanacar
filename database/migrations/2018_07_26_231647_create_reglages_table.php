<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReglagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reglages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_reglage');
            $table->date('date_reglage');
            $table->integer('montant');
            

            $table->integer('car_id')->unsigned();
            $table->integer('agency_id')->unsigned();
            $table->integer('user_id')->unsigned();
            
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('reglages');
    }
}
