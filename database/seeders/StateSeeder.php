<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        State::insert([
            ['country_id' => "15",'name'=>'Alabama','created_at' => now(), 'updated_at' => now()],
            ['country_id' => "15",'name'=>'California','created_at' => now(), 'updated_at' => now()],
            ['country_id' => "15",'name'=>'Alaska','created_at' => now(), 'updated_at' => now()],
            ['country_id' => "15",'name'=>'Arozona','created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
