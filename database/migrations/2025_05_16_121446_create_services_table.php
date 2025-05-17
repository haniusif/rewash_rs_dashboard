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
    Schema::create('services', function (Blueprint $table) {
      $table->id();
      $table->string('name'); // Arabic name
      $table->string('en_name')->nullable(); // English name
      $table->decimal('price', 8, 2)->default(0); // Regular price
      $table->decimal('promotional_price', 8, 2)->nullable(); // Optional discounted price
      $table->boolean('is_active')->default(true); // Active status
      $table->integer('sorting')->default(0); // Sorting order
      $table->string('expected_duration')->nullable(); // Expected service duration (e.g., "30 mins", "1 hour")
      $table->timestamps();
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
