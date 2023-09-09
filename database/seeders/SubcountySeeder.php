<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcountySeeder extends Seeder
{
    public function run()
    {
        $subcounties = [
            ['name' => 'Subcounty1', 'county_id' => 1],
            ['name' => 'Subcounty2', 'county_id' => 2],
            ['name' => 'Subcounty3', 'county_id' => 1],
        ];

        DB::table('subcounties')->insert($subcounties);
    }
}
