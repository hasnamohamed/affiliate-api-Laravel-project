<?php

namespace Database\Seeders;

use App\Models\Governate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;


class GovernateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get(
            'https://raw.githubusercontent.com/Tech-Labs/egypt-governorates-and-cities-db/master/governorates.json'
        )->json();

        // البيانات الحقيقية هنا
        $governorates = $response[2]['data'];

        foreach ($governorates as $gov) {
            Governate::updateOrCreate(
                ['id' => $gov['id']],
                [
                    'name' => $gov['governorate_name_ar'],
                ]
            );
        }
    }
}
