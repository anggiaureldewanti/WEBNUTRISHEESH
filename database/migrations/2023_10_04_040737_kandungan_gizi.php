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
        Schema::create('kandungan_gizi', function (Blueprint $table) {
            $table->id();
            $table->string('kalori');
            $table->string('protein');
            $table->string('karbohidrat');
            $table->string('lemak');
            $table->string('energi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
