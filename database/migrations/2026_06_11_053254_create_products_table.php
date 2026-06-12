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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('name');

            $table->decimal('price', 10, 2);

            $table->integer('total_amount')->default(0);

            $table->string('image')->nullable();

            $table->string('code')->unique();

            $table->decimal('commission', 10, 2)->default(0);

            $table->boolean('is_best_seller')->default(false);
            $table->boolean('is_new_arrival')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
