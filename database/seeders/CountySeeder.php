<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counties = [
            ['county_name' => 'MOMBASA'],
            ['county_name' => 'KWALE'],
            ['county_name' => 'KILIFI'],
            // Add more counties here as needed.
        ];

        DB::table('counties')->insert($counties);
    }
}
