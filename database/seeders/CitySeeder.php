<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        City::insert([

            ['state_id' => "1",'name'=>'Peshawar','created_at' => now(), 'updated_at' => now()],
            ['state_id' => "1",'name'=>'Charsadda','created_at' => now(), 'updated_at' => now()],
            ['state_id' => "1",'name'=>'Mingora','created_at' => now(), 'updated_at' => now()],
            ['state_id' => "1",'name'=>'Abbotabbad','created_at' => now(), 'updated_at' => now()],

            ['state_id' => "10",'name'=>'Minneriya','created_at' => now(), 'updated_at' => now()],
            ['state_id' => "10",'name'=>'Dambulla','created_at' => now(), 'updated_at' => now()],
            ['state_id' => "10",'name'=>'Habarana','created_at' => now(), 'updated_at' => now()],
            ['state_id' => "10",'name'=>'Anuradhapura','created_at' => now(), 'updated_at' => now()],

            ['state_id' => "6",'name'=>'Patna','created_at' => now(), 'updated_at' => now()],
            ['state_id' => "6",'name'=>'Buxar','created_at' => now(), 'updated_at' => now()],
            ['state_id' => "6",'name'=>'Gaya','created_at' => now(), 'updated_at' => now()],
            ['state_id' => "6",'name'=>'Punia','created_at' => now(), 'updated_at' => now()],

            ['state_id' => "14",'name'=>'Los Angeles','created_at' => now(), 'updated_at' => now()],
            ['state_id' => "14",'name'=>'San Francisco','created_at' => now(), 'updated_at' => now()],
            ['state_id' => "14",'name'=>'San Diego','created_at' => now(), 'updated_at' => now()],
            ['state_id' => "14",'name'=>'San Jose','created_at' => now(), 'updated_at' => now()],

        ]);
    }
}
