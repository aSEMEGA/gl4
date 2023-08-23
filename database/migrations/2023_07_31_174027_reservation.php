<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('numerovoyageur');
            $table->string('nom');
            $table->integer('prenom');
            $table->integer('sexe');
            $table->integer('adresse');
            $table->integer('telephone');
            $table->integer('compagnie');
            $table->integer('date_depart');
            $table->integer('heure_depart');
            $table->integer('source');
            $table->integer('destination');
            $table->integer('montant');
            $table->integer('date_reservation');
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
        //
        Schema::dropIfExists('reservation');
    }
}
