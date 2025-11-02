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
        Schema::create('titles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 500)->nullable();
            $table->foreignId('news_id')->constrained('news')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('creator_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('reviewer_id')->constrained('users')->cascadeOnUpdate()->nullOnDelete()->nullable();
            $table->enum('channel', ['web', 'socialMedia']);
            $table->enum('status', ['waiting','progressing', 'reject', 'accept']);
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titles');
    }
};
