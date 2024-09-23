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
        Schema::create('school_careers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schoolyear_id')->constrained();
            $table->foreignId('course_id')->constrained();
            $table->foreignId('group_id')->constrained();
            $table->foreignId('student_id')->constrained();
            $table->date('enrollment_date');
            $table->date('graduation_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_careers');
    }
};
