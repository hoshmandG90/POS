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
        Schema::create('wasl_krede_qarz_companyakans', function (Blueprint $table) {
            $table->id();
            $table->string('NameCo')->nullable();
            $table->string('JmaraPsula')->nullable();
            $table->string('JorePsula')->nullable();
            $table->datetime('Date');
            $table->string('KoyPara')->nullable();
            $table->string('BryWaslBuu')->nullable();
            $table->string('KoyQarzMawa')->nullable();
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
        Schema::dropIfExists('wasl_krede_qarz_companyakans');
    }
};
