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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('item_name'); // Name of the item
            $table->text('description')->nullable(); // Optional description of the item
            $table->integer('quantity'); // Available quantity in stock
            $table->decimal('price', 10, 2); // Price of the item
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
