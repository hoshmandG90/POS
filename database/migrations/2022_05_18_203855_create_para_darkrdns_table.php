<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('para_darkrdns', function (Blueprint $table) {
            $table->id();
            $table->string('cashier_name')->nullable();
            $table->datetime('Date')->nullable();
            $table->string('ParayDarkraw')->nullable();
            $table->string('TB')->nullable();
            $table->string('parayQasa')->nullable();
            $table->string('Jor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('para_darkrdns');
    }
};
