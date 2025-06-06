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
            $table->increments('id')->unique();
            $table->string('username', 50)->unique();
            $table->string('email', 100)->unique();
            $table->string('password', 50);
            $table->string('first_name',40);
            $table->string('last_name',40);
            $table->date('birth_day');
            $table->date('registration_day');
            $table->string('address', 100);
            $table->string('phone_number', 20);
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
