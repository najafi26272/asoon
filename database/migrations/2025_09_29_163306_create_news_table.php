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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->comment('عنوان اولیه خبر');
            $table->foreignId('creator_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('link', 500)->nullable();
            $table->text('content')->nullable();
            $table->text('summary')->nullable();
            $table->string('agency')->nullable()->comment('خبرگزاری');
            $table->string('topic')->nullable()->comment('موضوع خبر');
            $table->text('reason')->nullable();
            $table->text('goals')->nullable();
            $table->enum('channel', ['site', 'social media']);
            $table->enum('language', ['fa', 'en', 'ar']);
            $table->enum('priority', ['low', 'medium', 'high']);
            $table->string('status')->nullable();
            $table->boolean('need_cover')->default(true);
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
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
        Schema::dropIfExists('news');
    }
};
