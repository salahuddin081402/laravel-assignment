<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('invoice_products', function (Blueprint $t) {
            $t->id();
            $t->foreignId('invoice_id')->constrained('invoices')->cascadeOnUpdate();
            $t->foreignId('product_id')->constrained('products')->cascadeOnUpdate();
            $t->foreignId('user_id')->constrained('users')->cascadeOnUpdate();
            $t->string('qty');
            $t->string('sale_price');
            $t->timestamps();
            $t->index(['invoice_id','product_id']);
        });
    }
    public function down(): void { Schema::dropIfExists('invoice_products'); }
};
