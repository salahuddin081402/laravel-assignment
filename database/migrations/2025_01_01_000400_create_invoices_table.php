<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('invoices', function (Blueprint $t) {
            $t->id();
            $t->string('total');
            $t->string('discount')->nullable();
            $t->string('vat')->nullable();
            $t->string('payable');
            $t->foreignId('user_id')->constrained('users')->cascadeOnUpdate();
            $t->foreignId('customer_id')->constrained('customers')->cascadeOnUpdate();
            $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('invoices'); }
};
