<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id_recensione');
            $table->integer('id_utente')->unsigned()->references('id')->on('users');
            $table->integer('id_prodotto')->unsigned()->references('id')->on('products');;
            
            $table->integer('voto');
            $table->string('commento',400);
            $table->date('data_recensione');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
