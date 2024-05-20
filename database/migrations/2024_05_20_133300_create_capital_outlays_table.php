<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapitalOutlaysTable extends Migration
{
    public function up()
    {
        Schema::create('capital_outlays', function (Blueprint $table) {
            $table->id();
            $table->string('account_code');
            $table->string('item');
            $table->decimal('proposed_budget', 15, 2);
            $table->text('justification');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('capital_outlays');
    }
}