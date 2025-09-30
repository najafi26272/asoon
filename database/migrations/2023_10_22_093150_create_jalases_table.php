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
        Schema::create('jalases', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->text('description')->nullable();
            $table->foreignId('creator_id')->constrained()->onUpdate('cascade')->onDelete('cascade')->on('users');
            $table->timestamp('date');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jalases');
    }
};
