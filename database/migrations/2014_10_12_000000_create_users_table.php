<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();                              // BIGINT
            $table->string('name');                    // VARCHAR
            $table->string('mobile')->nullable();      // VARCHAR
            $table->string('otp')->nullable();         // VARCHAR
            $table->string('email')->unique();         // VARCHAR
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');                // VARCHAR
            $table->rememberToken();
            $table->timestamps();                      // created_at, updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
