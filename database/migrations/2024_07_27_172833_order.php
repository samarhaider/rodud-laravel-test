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
            $table->unsignedBigInteger('customer_id')->foreign('user_id')->references('id')->on('users');;
            $table->string('item');
            $table->string('location');
            $table->string('size');
            $table->string('weight');
            $table->enum('status', ['pending', 'in-progress', 'delivered', 'cancelled'])->default('pending');
            $table->timestamp('pickup_at')->nullable();
            $table->timestamp('delivery_at')->nullable();
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
