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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_utente')->unique();
            $table->string('username', 50)->unique();
            $table->string('email', 100)->unique();
            $table->string('password', 50);
            $table->string('nome',40);
            $table->string('cognome',40);
            $table->date('ddn');
            $table->date('ddr');
            $table->string('indirizzo', 100);
            $table->string('numtelefono', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
