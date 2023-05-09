<?php

namespace Database\Seeders;

use App\Models\Constituency;
use App\Models\County;
use App\Models\Ward;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DropDownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $county=County::create(['name'=> 'Mombasa']);

        $constituency= Constituency::create(['county_id'=> $county->id, 'name' => 'Changamwe']);

        Ward::create(['constituency_id' => $constituency->id, 'name' => 'port reitz']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Kipevu']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Airport']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Changamwe']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Chaani']);

        $constituency= Constituency::create(['county_id'=> $county->id, 'name' => 'Jomvu']);

        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Jomvu Kuu']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Miritini']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Mikindani']);

        $constituency= Constituency::create(['county_id'=> $county->id, 'name' => 'Kisauni']);

        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Mjambere']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Junda']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Bamburi']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Mwakirunge']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Mtopanga']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Magogoni']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Shanzu']);

        $constituency= Constituency::create(['county_id'=> $county->id, 'name' => 'Nyali']);

        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Frere Town']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Ziwa la ng\'ombe']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Mkomani']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Kongowea']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Kadzandani']);

        $constituency= Constituency::create(['county_id'=> $county->id, 'name' => 'Likoni']);

        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Mtongwe']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Shika adabu']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Bofu']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Likoni']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Tibwani']);

        $constituency= Constituency::create(['county_id'=> $county->id, 'name' => 'Mvita']);

        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Mji wa kale/Makadara']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Tudor']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Tononoka']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Shimanzi/ganjoni']);
        Ward::create(['constituency_id' => $constituency->id, 'name' => 'Majengo']);
    }
}
