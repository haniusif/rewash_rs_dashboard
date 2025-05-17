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

      // Foreign keys
      $table->foreignId('order_status_id')->constrained('order_statuses')->onDelete('restrict');
      $table->foreignId('user_id')->nullable()->constrained('providers')->onDelete('set null');
      $table->foreignId('provider_id')->nullable()->constrained('providers')->onDelete('set null');

      // Timestamps for work flow
      $table->timestamp('go_to_user_time')->nullable();
      $table->timestamp('start_work_time')->nullable();
      $table->timestamp('finish_work_time')->nullable();

      // Location
      $table->decimal('pickup_lat', 10, 6)->nullable();
      $table->decimal('pickup_lng', 10, 6)->nullable();
      $table->string('pickup_address')->nullable();

      // Order details
      $table->date('order_date')->nullable();
      $table->decimal('amount', 10, 2)->default(0);
      $table->decimal('vat', 10, 2)->default(0);
      $table->decimal('discount', 10, 2)->default(0);
      $table->decimal('total_amount', 10, 2)->default(0);

      $table->timestamps();
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
