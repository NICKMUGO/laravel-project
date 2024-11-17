<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::dropIfExists('people'); // Drops the table if it exists
    }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Optionally, recreate the table here
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }
};
