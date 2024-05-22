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
        Schema::create('amendment', function (Blueprint $table) {
            $table->increments('amendment_no');
            $table->int('plan_no_revised');
            $table->date('date_revision');
            $table->decimal('planned_ammount', 10, 2);
            $table->date('date_submitted');
            $table->int('item_No');
            $table->string('description');
            $table->int('quantity');
            $table->string('unit');
            $table->decimal('unit_cost', 10, 2);
            $table->decimal('ammount', 10, 2);
            $table->int('procurement_quantity');
            $table->decimal('procurement_ammount', 10, 2);
            $table->string('procurement_justification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amendment');
    }
};
