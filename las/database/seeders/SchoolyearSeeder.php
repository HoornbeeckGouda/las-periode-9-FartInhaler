<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolyearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schoolyears')->insert([
            ['schoolyear' => '2018-2019', 'start' => '2018-08-01', 'end' => '2019-07-31'],
            ['schoolyear' => '2019-2020', 'start' => '2019-08-01', 'end' => '2020-07-31'],
            ['schoolyear' => '2020-2021', 'start' => '2020-08-01', 'end' => '2021-07-31'],
            ['schoolyear' => '2021-2022', 'start' => '2021-08-01', 'end' => '2022-07-31'],
        ]);
    }
}
