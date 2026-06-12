<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->value('id'),

            'shipment_status' => fake()->randomElement([
                'pending', //لسه ما اتشحنش
                'shipping', //في الطريق
                'delivered', //وصل للعميل
                'canceled', //تم إلغاء الشحن
                'returned' //رجع
            ]),

            'order_status' => fake()->randomElement([
                'pending',      // جديد
                'confirmed',    // تم التأكيد
                'processing',   // بيتجهز
                'completed',    // اتسلم وانتهى
                'canceled',     // ملغي
            ]),
        ];
    }
}
