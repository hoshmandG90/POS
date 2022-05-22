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
        Schema::create('kala_krawakan_wasals', function (Blueprint $table) {
            $table->id();
            $table->string('Jmarawasll')->nullable();
            $table->string('NameKala')->nullable();
            $table->string('NrxkrenBaDana')->nullable();
            $table->string('BryKren')->nullable();
            $table->string('Konrx')->nullable();
            $table->string('IDKala')->nullable();
            $table->integer('IDPuslaKren')->nullable();
            $table->string('NrxFroshtn')->nullable();
            $table->string('NrxFroshtnJumla')->nullable();
            $table->datetime('BarwareEXP')->nullable();
            $table->boolean('CheckBox')->default(false)->nullable();
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
        Schema::dropIfExists('kala_krawakan_wasals');
    }
};
