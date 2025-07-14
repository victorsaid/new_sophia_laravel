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
        Schema::create('local_events', function (Blueprint $table) {
            $table->id();

            $table->string('name'); // nome - @Column(nullable = false)
            $table->string('email')->unique()->nullable(); // email - Pode ser único e opcional
            $table->string('phone_number'); // telCelular - @Column(nullable = false)
            $table->string('whatsapp')->nullable(); // whatsapp

            $table->foreignId('address_id')->nullable()->constrained()->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local_events');
    }
};
