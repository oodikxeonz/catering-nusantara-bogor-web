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
        Schema::create('packages', function (Blueprint $table) {
    $table->id();
    $table->foreignId('category_id')->constrained()->cascadeOnDelete();
    $table->string('name');
    $table->enum('product_type', ['nasi_box', 'tumpeng', 'snack_box']);
    $table->decimal('price_per_pax', 10, 2);
    $table->integer('min_order')->default(1);
    $table->text('description')->nullable();
    $table->string('image')->nullable();
    $table->boolean('is_customizable')->default(false);
    $table->boolean('is_available')->default(true);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
