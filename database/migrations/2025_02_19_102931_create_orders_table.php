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
            $table->increments('id')->unique();
            $table->integer('user_id')->references('id')->on('users')->default(1);
            $table->date('order_date');
            $table->string('status');#$table->enum('stato_ordine', ['in Lavorazione','Confermato', 'in Elaborazione', 'Spedito', 'Consegato'])->default('in Lavorazione');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->decimal('total',8,2);
            $table->timestamps();
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
