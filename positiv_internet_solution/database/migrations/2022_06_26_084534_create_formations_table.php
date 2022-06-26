<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('titre_fromation');
            $table->string('description_formation');
            $table->string('date_debut_formation');
            $table->string('date_fin_formation');
            $table->string('photo_couverture_formation');
            $table->string('contenu_details_formation');
            $table->string('auteur_formation');
            $table->string('reference_formation');
            $table->string('prix_formation');
            $table->boolean('status_formation')->default(0);
            $table->integer('user_id');
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
        Schema::dropIfExists('formations');
    }
};
