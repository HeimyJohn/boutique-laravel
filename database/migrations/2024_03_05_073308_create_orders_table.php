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
            $table->uuid('id')->primary();
            $table->tinyText('order_number')->unique();
            $table->dateTime('order_date');
            $table->dateTime('delivery_date')->nullable();
            $table->enum('status', ['created', 'paid', 'shipped', 'delivered', 'canceled']);
            $table->unsignedFloat('total');
            $table->foreignUuid('user_id')->constrained('users');
            $table->foreignUuid('delivery_address_id')->constrained('addresses');
            $table->foreignUuid('billing_address_id')->constrained('addresses');
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
