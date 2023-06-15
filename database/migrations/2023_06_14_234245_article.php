<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Article extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 50);
            $table->text('contenu', 1000);
            $table->date('date_publication');
            $table->unsignedBigInteger('etudiant_id'); // Foreign key column

            $table->foreign('etudiant_id') // Define foreign key constraint
                ->references('id')
                ->on('etudiants');

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
        Schema::dropIfExists('articles');
    }
}
