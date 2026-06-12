<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Governate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get(
            'https://raw.githubusercontent.com/Tech-Labs/egypt-governorates-and-cities-db/master/cities.json'
        )->json();

        $cities = $response[2]['data'];

        foreach ($cities as $city) {

            City::create([
                'name' => $city['city_name_ar'],
                'governate_id' => $city['governorate_id'],
            ]);
        }
    }
}
