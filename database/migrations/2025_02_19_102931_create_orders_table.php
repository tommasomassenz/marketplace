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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_ordine')->unique();
            $table->integer('id_utente')->references('id')->on('users')->unique();
            $table->date('data_ordine');
            $table->enum('stato_ordine', ['in Lavorazione','Confermato', 'in Elaborazione', 'Spedito', 'Consegato'])->default('in Lavorazione');
            $table->decimal('prezzo_totale');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
