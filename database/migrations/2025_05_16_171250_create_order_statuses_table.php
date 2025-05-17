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
    Schema::create('order_statuses', function (Blueprint $table) {
      $table->id();
      $table->string('name'); // Arabic status name
      $table->string('en_name')->nullable(); // English status name
      $table->integer('sorting')->default(0); // Order for sorting
      $table->string('label_color')->nullable(); // e.g. 'success', 'danger', '#FF0000'
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('order_statuses');
  }
};