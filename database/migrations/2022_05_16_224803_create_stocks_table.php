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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('stock_code')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('is_barcode')->nullable();
            $table->string('note')->nullable();
            $table->datetime('expired_at')->nullable();
            $table->string('address')->nullable();
            $table->string('made_in')->nullable();
        
            $table->string('name_company')->nullable(null);
            $table->string('name_product_type')->nullable();
            $table->string('total_number_of_units')->nullable();
            $table->string('purchase_price_in_units')->nullable();
            $table->string('selling_price_per_piece')->nullable();
            $table->string('KoyNrx')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
};
