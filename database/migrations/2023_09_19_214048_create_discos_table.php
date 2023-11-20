<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('discos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artista_id');
            $table->string('nombre');
            $table->string('genero');
            //$table->string('artista');
            $table->integer('year');
            $table->decimal('precio');
            $table->string('archivo_ubicacion');
            $table->string('archivo_nombre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discos');
    }
};
