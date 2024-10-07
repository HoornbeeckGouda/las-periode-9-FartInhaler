<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Subjects')->insert([

            ['subject' => 'NL'],
            ['subject' => 'EN'],
            ['subject' => 'REK'],
            ['subject' => 'GDT'],
            ['subject' => 'BUR'],
            ['subject' => 'PBG'],
            ['subject' => 'PGF'],
            ['subject' => 'SWO'],
            ['subject' => 'SEC'],
            ['subject' => 'TEC'],
        ]);
    }
}
