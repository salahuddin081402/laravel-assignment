<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('products', function (Blueprint $t) {
            $t->id();
            $t->foreignId('user_id')->constrained('users')->cascadeOnUpdate();
            $t->foreignId('category_id')->constrained('categories')->cascadeOnUpdate();
            $t->string('name');
            $t->string('price');
            $t->string('unit');
            $t->string('image')->nullable();
            $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('products'); }
};
