<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wards')->insert([
            ['subcounty_id' => 1, 'ward_name' => 'Ward 1'],
            ['subcounty_id' => 1, 'ward_name' => 'Ward 2'],
            ['subcounty_id' => 2, 'ward_name' => 'Ward 3'],
        ]);
    }
}
