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
<<<<<<< Updated upstream:database/migrations/2023_11_09_130944_create_product_configurations_table.php
        Schema::create('product_configurations', function (Blueprint $table) {
            $table->integer('product_item_id');
            $table->integer('variation_option_id');
=======
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->longText('message');
            $table->timestamps();
>>>>>>> Stashed changes:database/migrations/2024_01_16_141434_create_services_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
