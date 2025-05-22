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
    Schema::create('rsa_advertisements', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('en_title');
      $table->string('image')->nullable();
      $table->enum('advertisement_type', ['general', 'external_link', 'service']);
      $table->text('advertisement_data')->nullable();
      $table->boolean('is_active')->default(true);
      $table->integer('sorting')->default(0);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('rsa_advertisements');
  }
};