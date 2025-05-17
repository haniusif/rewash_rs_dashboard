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
    Schema::create('order_details', function (Blueprint $table) {
      $table->id();

      $table->unsignedBigInteger('order_id');
      $table->unsignedBigInteger('rsa_service_id');
      $table->integer('quantity')->default(1);
      $table->decimal('service_price', 10, 2)->default(0); // Unit price
      $table->decimal('total_price', 10, 2)->default(0);   // quantity * unit

      $table->timestamps();

      // Foreign Keys
      $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
      $table->foreign('rsa_service_id')->references('id')->on('rsa_services')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('order_details');
  }
};