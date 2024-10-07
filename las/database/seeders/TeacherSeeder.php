<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Subject;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $users = User::all()->random(10);
        $subjectid = Subject::all()->random(10);
        Teacher::factory()->count(10)->create(function() use ($users, $subjectid) {
            return[
                'user_id' => $users->random(),
                'subject_id' => $subjectid->random(),
            ];
        }

        );
    }
}
