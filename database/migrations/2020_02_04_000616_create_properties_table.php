<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('c_id');
            $table->foreign('c_id')->references('id')->on('users');
            $table->string('c_name');
            $table->string('p_price');
            $table->string('p_status');
            $table->text('p_image')->nullable();
            $table->string('p_type');
            $table->string('p_specs');
            $table->string('p_address');
            $table->string('p_city');
            $table->text('p_description');
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
        Schema::dropIfExists('properties');
    }
}
