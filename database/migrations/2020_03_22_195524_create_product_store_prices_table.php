<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductStorePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_store_prices', function (Blueprint $table) {
            $table->foreignId('variant_id');
            $table->foreignId('branch_id');
            $table->double('price', 8, 2);
            $table->foreignId('created_by')->nullable();
            $table->timestamps();

            $table->foreign('variant_id')->references('id')->on('product_variants');
            $table->foreign('branch_id')->references('id')->on('store_branches');
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_store_prices');
    }
}
