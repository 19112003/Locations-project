<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('modele');
            $table->string('marque');
            $table->string('categorie');
            $table->integer('nbre_place');
            $table->integer('nbre_porte');
            $table->string('boite_vitesse');
            $table->float('kilometrage');
            $table->integer('annee');
            $table->string('supplement');
            $table->string('etat');
            $table->boolean('disponible');
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
        Schema::dropIfExists('vehicules');
    }
}
