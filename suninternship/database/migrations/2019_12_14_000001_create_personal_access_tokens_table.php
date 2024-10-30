<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('personal_access_tokens', function (Blueprint $table) {
        $table->id();
        
        // Réduction de la longueur de la colonne tokenable_type
        $table->string('tokenable_type', 191);  // Réduction ici
        $table->unsignedBigInteger('tokenable_id'); // Assurez-vous que cela correspond au type de ID utilisé
        
        $table->string('name');
        $table->string('token', 64)->unique();
        $table->text('abilities')->nullable();
        $table->timestamp('last_used_at')->nullable();
        $table->timestamps();

        // Ajout de l'index sur tokenable_type et tokenable_id
        $table->index(['tokenable_type', 'tokenable_id']); 
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
}
