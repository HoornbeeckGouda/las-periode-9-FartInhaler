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
            $table->int('schoolyear_id');
            $table->int('course_id');
            $table->int('group_id');
            $table->int('student_id');
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
