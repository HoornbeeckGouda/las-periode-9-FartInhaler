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
            'id' => 1,
            'name' => 'PGR',
            'id' => 2,
            'name' => 'ENG',
            'id' => 3,
            'name' => 'NL',
            'id' => 4,
            'name' => 'SWO',
            'id' => 5,
            'name' => 'GDT'
        ]);
    }
}
