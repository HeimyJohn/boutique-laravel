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
            $table->uuid('id')->primary();
            $table->tinyText('name');
            $table->float('price');
            $table->mediumText('description');
            $table->tinyText('image_path')->nullable();
            $table->unsignedInteger('stock');
            $table->foreignUuid('vat_id')->constrained();
            $table->foreignUuid('category_id')->constrained();
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
