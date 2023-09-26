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
        Schema::create('nilai_gizis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kalori');
            $table->string('lemak');
            $table->string('protein');
            $table->string('mineral');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_gizis');
    }
};
