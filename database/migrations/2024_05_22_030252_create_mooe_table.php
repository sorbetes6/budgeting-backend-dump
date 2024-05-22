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
        Schema::create('mooe', function (Blueprint $table) {
            $table->increments('mooe_no');
            $table->varchar('college_office');
            $table->varchar('account_code');
            $table->varchar('items_expenditure');
            $table->decimal('budget', 10, 2);
            $table->varchar('justification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mooe');
    }
};
