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
        Schema::create('reserve_rooms', function (Blueprint $table) {
            $table->id();

            $table->foreignId('local_turma_id')->constrained()->cascadeOnDelete();
            $table->foreignId('collaborator_id')->constrained()->cascadeOnDelete();
            $table->foreignId('educational_area_id')->constrained()->cascadeOnDelete();

            $table->string('justification')->nullable();
            $table->integer('total_participants')->default(0);
            $table->string('situation')->default('Pendente');
            $table->datetime('initial_date');
            $table->datetime('end_date');
            $table->text('supplies')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserve_rooms');
    }
};
