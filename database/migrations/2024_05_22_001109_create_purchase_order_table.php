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
            $table->integerincrements('purchase_order_no');
            $table->integer('PR_no');
            $table->integer('TIN');
            $table->integer('tel_no');
            $table->string('supplier');
            $table->date('date');
            $table->string('address');
            $table->string('mode_procurement');
            $table->string('price_validity');
            $table->string('payment_terms');
            $table->string('place_delivery');
            $table->date('date_delivery');
            $table->integer('item_no');
            $table->integer('quantity');
            $table->string('unit');
            $table->string('description');
            $table->decimal('unit_cost', 10, 2);
            $table->decimal('amount', 10, 2);
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
