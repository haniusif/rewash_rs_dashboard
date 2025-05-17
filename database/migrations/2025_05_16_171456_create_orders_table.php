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
    Schema::create('orders', function (Blueprint $table) {
      $table->id();
      $table->string('order_number')->unique();
      $table->unsignedBigInteger('order_status_id');
      $table->timestamp('go_to_user_time')->nullable();
      $table->timestamp('start_work_time')->nullable();
      $table->timestamp('finish_work_time')->nullable();

      $table->unsignedBigInteger('user_id');
      $table->unsignedBigInteger('provider_id')->nullable();

      $table->decimal('pickup_lat', 10, 6)->nullable();
      $table->decimal('pickup_lng', 10, 6)->nullable();
      $table->string('pickup_address')->nullable();

      $table->date('order_date')->nullable();

      $table->decimal('amount', 10, 2)->default(0);
      $table->decimal('vat', 10, 2)->default(0);
      $table->decimal('discount', 10, 2)->default(0);
      $table->decimal('total_amount', 10, 2)->default(0);

      $table->timestamps();

      // Foreign keys
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('provider_id')->references('id')->on('users')->onDelete('set null');
      $table->foreign('order_status_id')->references('id')->on('order_statuses')->onDelete('restrict');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('orders');
  }
};