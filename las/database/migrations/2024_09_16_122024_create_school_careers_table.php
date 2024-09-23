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
            $table->foreign('schoolyear_id')->references('id')->on('school_years');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('student_id')->referances('id')->on('students');
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
