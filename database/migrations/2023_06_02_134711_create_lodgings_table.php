<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLodgingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lodgings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('city');
            $table->string('district');
            $table->float('size');
            $table->string('standing');
            $table->integer('nbr_bathroom');
            $table->integer('nbr_bedroom');
            $table->integer('nbr_livingroom');
            $table->integer('nbr_kitchen');
            $table->string('type');
            $table->boolean('furnished');
            $table->string('equipment');
            $table->integer('price_day');
            $table->integer('price_month');
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
        Schema::dropIfExists('lodgings');
    }
}
