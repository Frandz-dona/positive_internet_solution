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
        
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('livre_nom');
            $table->string('livre_description')->nullable();
            $table->integer('livre_nb_page')->nullable();
            $table->float('livre_prix_version_num')->nullable();
            $table->float('livre_prix_version_pap')->nullable();
            $table->float('livre_prix_promo')->nullable();
            $table->date('livre_date_sortie')->nullable();
            $table->string('livre_image');
            $table->string('livre_fichier')->nullable();
            $table->string('livre_auteur')->nullable();
            $table->boolean('livre_status')->default(0);
            $table->foreignId('categories_id')->constrained();
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
        Schema::dropIfExists('livres');
    }
};
