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
        Schema::create('appropriations', function (Blueprint $table) {
            $table->increments('appropriations_no');
            $table->varchar('college_office');
            $table->varchar('account_code');
            $table->decimal('budget', 10, 2);
            $table->varchar('approved_board');
            $table->decimal('total', 10, 2);
            $table->varchar('obligations');
            $table->decimal('unobligated', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appropriations');
    }
};
