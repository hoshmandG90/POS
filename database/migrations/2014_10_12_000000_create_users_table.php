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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('show_password')->nullable();

            
            $table->boolean('ListKala')->default(false);
            $table->boolean('ListCompanya')->default(false);
            $table->boolean('KalaFroshtn')->default(false);
            $table->boolean('ListGarak')->default(false);
            $table->boolean('ListMaxzan')->default(false);
            $table->boolean('KalaKren')->default(false);
            $table->boolean('Bakarhenar')->default(false);
            $table->boolean('BashiFroshtn')->default(false);
            $table->boolean('Nawneshan')->default(false);
            $table->boolean('hokareWarnageraw')->default(false);
            $table->boolean('BashiGarawakan')->default(false);
            
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
        Schema::dropIfExists('users');
    }
};
