<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {

        Schema::create('member', function (Blueprint $table) {
            $table->id();
            $table->string("username")->nullable();
            $table->string("email")->nullable();
            $table->string("password")->unique();
            $table->string("confirmpassword")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member');
    }

};
