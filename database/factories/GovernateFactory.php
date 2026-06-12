<?php

namespace Database\Factories;

use App\Models\Governate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Governate>
 */
class GovernateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $governates = [
            'القاهرة',
            'الجيزة',
            'الإسكندرية',
            'الدقهلية',
            'البحر الأحمر',
            'البحيرة',
            'الفيوم',
            'الغربية',
            'الإسماعيلية',
            'المنوفية',
            'المنيا',
            'القليوبية',
            'الوادي الجديد',
            'السويس',
            'اسوان',
            'اسيوط',
            'بني سويف',
            'بورسعيد',
            'دمياط',
            'الشرقية',
            'جنوب سيناء',
            'كفر الشيخ',
            'مطروح',
            'الأقصر',
            'قنا',
            'شمال سيناء',
            'سوهاج',
        ];

        foreach ($governates as $name) {
            Governate::create([
                'name' => $name,
            ]);
        }
    }
}
