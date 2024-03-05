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
        Schema::create('product_ordered_has_orders', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('product_ordered_id');
            $table->uuid('order_id');
            $table->primary(['product_ordered_id', 'order_id']);
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_ordered_has_orders');
    }
};
