<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Etudiant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id(); // Colonne 'id' par défaut
            $table->unsignedBigInteger('id')->change(); // Modification de la colonne pour être unsignedBigInteger
            $table->string('nom', 50);
            $table->string('adresse', 250);
            $table->string('phone', 50);
            $table->date('date_naissance');
            $table->integer('ville_id');
            $table->timestamps();

            $table->foreign('ville_id')
                ->references('id')
                ->on('villes');

            $table->foreign('id') // Utilise id comme clé étrangère vers la table users
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
