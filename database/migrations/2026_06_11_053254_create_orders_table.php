<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->enum('shipment_status', [
                'pending', //لسه ما اتشحنش
                'shipping', //في الطريق
                'delivered', //وصل للعميل
                'canceled', //تم إلغاء الشحن
                'returned' //رجع
            ])->default('pending');
            $table->enum('order_status', [
                'pending',      // جديد
                'confirmed',    // تم التأكيد
                'processing',   // بيتجهز
                'completed',    // اتسلم وانتهى
                'canceled',     // ملغي
            ])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
