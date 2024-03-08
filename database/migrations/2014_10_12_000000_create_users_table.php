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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->tinyText('first_name')->nullable();
            $table->tinyText('last_name')->nullable();
            $table->tinyText('phone')->nullable();
            $table->tinyText('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyText('password');
            $table->tinyText('payment_method')->nullable();
            $table->foreignUuId('roles_id')->constrained('roles');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
