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
            $table->varchar('supplier');
            $table->date('date');
            $table->varchar('address');
            $table->varchar('mode_procurement');
            $table->varchar('price_validity');
            $table->varchar('payment_terms');
            $table->varchar('place_delivery');
            $table->date('date_delivery');
            $table->int('item_no');
            $table->int('quantity');
            $table->varchar('unit');
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
