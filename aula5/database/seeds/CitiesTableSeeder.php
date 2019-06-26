<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = City::insert([
            ["name" => 'Porto'],
            ["name" => 'Maia'],
            ["name" => 'V.N. Gaia']]
        );
        
    }
}
