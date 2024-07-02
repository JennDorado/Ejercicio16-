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
        Schema::create('gols', function (Blueprint $table) {
            $table->id();
            $table->string('minuto');
            $table->string('desc');
            $table->string('codigo');

            $table->unsignedBigInteger('equipo_id')->nullable();
            $table->foreign('equipo_id')
            ->references('id')
            ->on('equipos')->onDelete('cascade');

            $table->unsignedBigInteger('jugador_id')->nullable();
            $table->foreign('jugador_id')
            ->references('id')
            ->on('jugadors')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gols');
    }
};
