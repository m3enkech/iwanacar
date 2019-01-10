<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            Schema::create('cars', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('year');
                $table->string('image')->nullable();
                $table->string('matricule')->nullable();
                $table->bigInteger('mileage')->nullable()->unsigned();
                $table->string('engine')->nullable();
                $table->unsignedInteger('prix_achat')->nullable();
                $table->string('insurance_name')->nullable();
                $table->string('insurance_number')->nullable();
                $table->date('insurance_date')->nullable();
                $table->string('carte_grise')->nullable();
                $table->string('seats')->nullable();
                $table->string('transmission')->nullable();
                $table->string('doors')->nullable();
                $table->string('color')->nullable();
                $table->string('vidange')->nullable();
                $table->integer('price_unit')->nullable();
                $table->integer('price_long_term')->nullable();
                $table->integer('price_unit_agencies')->nullable();

                
                $table->integer('brand_id')->unsigned();
                $table->integer('user_id')->unsigned();
                $table->integer('agency_id')->unsigned();

                $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
                $table->softDeletes();
                $table->timestamps();
            });
        }
        Schema::table('cars', function (Blueprint $table) {
            $table->boolean('booking_status')->default(0);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
