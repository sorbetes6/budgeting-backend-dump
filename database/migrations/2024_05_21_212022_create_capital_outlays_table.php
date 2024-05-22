<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapitalOutlaysTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('capital_outlays', function (Blueprint $table) {
            $table->increments('capital_outlay_id');
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
    public function down()
    {
        Schema::dropIfExists('capital_outlays');
    }
}
