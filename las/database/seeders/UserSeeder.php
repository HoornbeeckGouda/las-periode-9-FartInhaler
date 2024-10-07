<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = role::all();
        User::factory(10)->create(function() use ($roles) {
            return[
                'role_id' => $roles->random(),
                'password' => 'geheim',
            ];
        });
    }
}
