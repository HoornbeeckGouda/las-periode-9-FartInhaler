<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\User;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all()->random(10);
       Student::factory(10)->create(function() use ($users) {
           return[
               'city' => 'gouda',
                'user_id' => $users->pop(),
           ];
        });
    }
}
