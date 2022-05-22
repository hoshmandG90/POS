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
        Schema::create('psula_krens', function (Blueprint $table) {
            $table->id();
            $table->string('NameCo')->nullable();
            $table->string('JmaraPsula')->nullable();
            $table->string('JorePsula')->nullable();
            $table->string('KoyPsula')->nullable();
            $table->datetime('Date');
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
        Schema::dropIfExists('psula_krens');
    }
};
