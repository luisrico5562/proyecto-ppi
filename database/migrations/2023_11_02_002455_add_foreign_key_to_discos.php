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
        Schema::table('discos', function (Blueprint $table) {
            $table->foreign('artista_id')->references('id')->on('artistas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('discos', function (Blueprint $table) {
            $table->dropForeign(['artista_id']);
        });
    }
};
