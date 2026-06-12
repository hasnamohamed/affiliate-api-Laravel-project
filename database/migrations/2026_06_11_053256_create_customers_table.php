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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');

            $table->string('phone');

            $table->string('whats_number')->nullable();

            $table->foreignId('governate_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('city_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->text('address')->nullable();

            $table->string('mark')->nullable();

            $table->foreignId('page_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->text('note')->nullable();

            $table->string('employee')->nullable();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
