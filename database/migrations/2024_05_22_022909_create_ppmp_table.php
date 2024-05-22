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
        Schema::create('ppmp', function (Blueprint $table) {
            $table->increments('ppmp_id');
            $table->varchar('college_office');
            $table->varchar('program_title');
            $table->varchar('type_contract');
            $table->varchar('account_title');
            $table->varchar('item_name');
            $table->varchar('unit_issue');
            $table->decimal('unit_price', 10, 2);
            $table->int('quantity');
            $table->varchar('account_code');
            $table->varchar('description');
            $table->decimal('procurement_method', 10, 2);
            $table->decimal('estimated_budget', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppmp');
    }
};
