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
        Schema::create('ordered_product_has_orders', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('ordered_product_id');
            $table->uuid('order_id');
            $table->primary(['ordered_product_id', 'order_id'])->unique();
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordered_products_has_orders');
    }
};
