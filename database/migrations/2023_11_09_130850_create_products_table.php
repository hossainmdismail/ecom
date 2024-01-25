<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('name');
            $table->string('slugs');
            $table->longText('short_description');
            $table->longText('description');
            $table->bigInteger('discount')->default(0);
            $table->decimal('price', 10, 2)->default(0.00);
            $table->string('link')->nullable();
            $table->integer('stock_status')->default(1);
            $table->integer('featured')->default(0);
            $table->integer('popular')->default(0);
            $table->integer('status')->default(1);
            $table->string('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->string('seo_tags')->nullable();
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
