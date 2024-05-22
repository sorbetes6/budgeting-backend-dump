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
            $table->varchar('payee');
            $table->varchar('office');
            $table->varchar('address');
            $table->varchar('responsibility_center');
            $table->varchar('account_code');
            $table->varchar('particulars');
            $table->decimal('ammount', 10, 2);
            $table->timestamps();
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
