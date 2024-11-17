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
        Schema::create('orderitems', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->unsignedBigInteger('order_id'); // Foreign key to orders table
            $table->unsignedBigInteger('inventory_id'); // Foreign key to inventory table
            $table->integer('quantity'); // Quantity of the item in the order
            $table->decimal('price', 10, 2); // Price of the item at the time of the order
            $table->timestamps(); // created_at and updated_at

            // Define foreign key constraints
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade'); // Cascade delete if order is deleted
            $table->foreign('inventory_id')->references('id')->on('inventory')->onDelete('cascade'); // Cascade delete if inventory item is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderitems');
    }
};
