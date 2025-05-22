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
    Schema::create('conversations', function (Blueprint $table) {
      $table->id();
      $table->enum('type', [
        'order',             // عميل ↔ مزود حول طلب
        'support_customer',  // عميل ↔ دعم
        'support_provider',  // مزود ↔ دعم
        'general_inquiry'    // عميل ↔ مزود بدون طلب (استفسار عام)
      ]);

      $table->integer(column: 'order_id');
      $table->integer(column: 'created_by');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('conversations');
  }
};