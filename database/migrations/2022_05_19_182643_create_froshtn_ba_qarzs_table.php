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
        Schema::create('froshtn_ba_qarzs', function (Blueprint $table) {
            $table->id();
            $table->string('IDWasll')->nullable();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('item')->nullable();
            $table->string('KoNrx')->nullable();
            $table->string('CasherName');
            $table->unsignedBigInteger('stock_id')->nullable(); // foreign key to stock table Barcode
            $table->unsignedBigInteger('user_id')->nullable(); // foreign key to user table authetication
           
            $table->string('CompanyName')->nullable();
            $table->string('joreKala')->nullable();
            $table->string('jorePsula')->nullable();
            $table->string('IDKala')->nullable();


            $table->string('Koywasl')->nullable();    
            $table->string('Qazanj')->nullable();
            $table->string('NrxKrenKala')->nullable();

            $table->string('NameKryar')->nullable();
            $table->string('Maxzan')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable(); // mabastm garak

            $table->string('NrxGayandn')->nullable(); // he sayaqawa boe det





            $table->timestamps();
            $table->boolean('checkBox')->default(false);



            $table->foreign('stock_id')->references('id')->on('stocks');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('froshtn_ba_qarzs');
    }
};
