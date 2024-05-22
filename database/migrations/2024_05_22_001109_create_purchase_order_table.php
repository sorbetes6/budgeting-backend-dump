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
        Schema::create('purchase_order', function (Blueprint $table) {
            $table->increments('purchase_order_no');
            $table->int('PR_no');
            $table->int('TIN');
            $table->int('tel_no');
            $table->string('supplier');
            $table->date('date');
            $table->string('address');
            $table->string('mode_procurement');
            $table->string('price_validity');
            $table->string('payment_terms');
            $table->string('place_delivery');
            $table->date('date_delivery');
            $table->int('item_no');
            $table->int('quantity');
            $table->string('unit');
            $table->decimal('ammount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_order');
    }
};
