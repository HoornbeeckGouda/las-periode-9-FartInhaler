<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('groups')->insert([
            ['name' => 'T4i1AD'],
            ['name' => 'T4i2AD'],
            ['name' => 'T4i3AD'],
            ['name' => 'T4i1BD'],
            ['name' => 'T4i2BD'],
            ['name' => 'T4i3BD']
        ]);
    }
}
