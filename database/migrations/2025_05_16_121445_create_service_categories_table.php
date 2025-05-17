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
    Schema::create('service_categories', function (Blueprint $table) {
      $table->id();
      $table->string('name'); // Category name (Arabic)
      $table->string('en_name')->nullable(); // Category name (English)
      $table->string('image')->nullable(); // Image URL or path
      $table->text('short_description')->nullable(); // Description
      $table->boolean('is_active')->default(true); // Active status
      $table->integer('sorting')->default(0); // Sorting order
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('service_categories');
  }
};