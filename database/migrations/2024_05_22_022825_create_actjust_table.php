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
        Schema::create('actjust', function (Blueprint $table) {
            $table->increments('actjust_id');
            $table->varchar('college_office');
            $table->varchar('statement_major');
            $table->varchar('statement_specific');
            $table->varchar('activity_justification');
            $table->varchar('method_accomplishing');
            $table->decimal('services_budget', 10, 2);
            $table->decimal('mooe_budget', 10, 2);
            $table->decimal('capital_outlay_budget', 10, 2);
            $table->decimal('total', 10, 2);
            $table->int('estimated_no_students');
            $table->decimal('total_cost', 10, 2);
            $table->decimal('cost_per_student', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actjust');
    }
};
