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
        Schema::create('bur', function (Blueprint $table) {
            $table->increments('bur_no');
            $table->date('date');
            $table->string('payee');
            $table->string('office');
            $table->string('address');
            $table->string('responsibility_center');
            $table->string('particulars');
            $table->string('account_code');
            $table->decimal('ammount', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bur');
    }
};
