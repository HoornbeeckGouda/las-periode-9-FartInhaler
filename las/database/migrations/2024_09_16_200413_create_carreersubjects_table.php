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
        Schema::create('carreersubjects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('carreer_id')->references('id')->on('carreers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreersubjects');
    }
};
