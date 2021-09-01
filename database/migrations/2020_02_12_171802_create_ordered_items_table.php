<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordered_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('c_id');
            $table->foreign('c_id')->references('id')->on('users');
            $table->unsignedInteger('p_id');
            $table->foreign('p_id')->references('id')->on('properties');
            $table->string('p_specs');
            $table->string('p_quantity');
            $table->string('email');
            $table->string('tel');
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
        Schema::dropIfExists('ordered_items');
    }
}
