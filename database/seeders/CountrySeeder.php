<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    use WithoutModelEvents;
    public function run(): void
    {
        //
        Country::insert([
            ['name' => "Pakistan",'created_at' => now(), 'updated_at' => now()],
            ['name' => "India",'created_at' => now(), 'updated_at' => now()],
            ['name' => "Sri Lanka",'created_at' => now(), 'updated_at' => now()],
            ['name' => "USA",'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
