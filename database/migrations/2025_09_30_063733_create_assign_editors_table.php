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
        Schema::create('assign_editors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->constrained('news')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('editor_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('assigner_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('assign_editors');
    }
};
