<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('conversation_messages', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('conversation_id');
      $table->integer('sender_id');
      $table->enum('type', ['text', 'image', 'voice', 'file'])->default('text');
      $table->text('message')->nullable();             // للمحتوى النصي
      $table->string('attachment_url')->nullable();    // لرابط الصورة أو الملف أو الصوت
      $table->timestamp('created_at')->useCurrent();

      $table->foreign('conversation_id')->references('id')->on('conversations')->cascadeOnDelete();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('conversation_messages');
  }
};