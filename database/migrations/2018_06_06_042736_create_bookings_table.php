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
            $table->increments('id');
            $table->integer('client_id')->unsigned();

            $table->integer('brand_id')->unsigned();
            $table->integer('car_id')->unsigned();
            $table->integer('agency_id')->unsigned();
            $table->date('start_date')->format('d.m.Y');
            $table->date('end_date')->format('d.m.Y');
            $table->longText('options')->nullable();
            $table->string('status')->default('pending');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
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
        Schema::dropIfExists('bookings');
    }
}
