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
        Schema::create('task_models', function (Blueprint $table) {
            $table->id();
            $table->string("user_id")->nullable();
            $table->string("isbn")->nullable();
            $table->string("book")->nullable();
            $table->string("author")->nullable();
            $table->string("category")->nullable();
            $table->string("price")->nullable();
            $table->string("copies")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_models');
    }
};
