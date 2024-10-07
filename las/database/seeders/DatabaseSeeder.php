<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Carreersubject;
use App\Models\Course;
use App\Models\group;
use App\Models\School_career;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            SubjectSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class,
            SubjectgradesSeeder::class,
            SchoolyearSeeder::class,
            CourseSeeder::class,
            CarreersubjectSeeder::class,
            groupSeeder::class,
        ]);
    }
}
