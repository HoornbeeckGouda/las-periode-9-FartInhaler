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
            $table->foreignId('subject_id')->constrained();
            $table->foreignId('carreer_id')->constrained('school_careers');
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
