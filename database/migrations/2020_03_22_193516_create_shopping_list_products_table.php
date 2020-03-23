<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingListProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_list_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shopping_list_id');
            $table->foreignId('variant_id');
            $table->float('quantity', 8, 2);
            $table->foreignId('branch_id')->nullable();
            $table->date('buying_date', 8, 2)->nullable();
            $table->double('buying_price', 8, 2)->nullable();
            $table->timestamps();

            $table->foreign('shopping_list_id')->references('id')->on('shopping_lists');
            $table->foreign('variant_id')->references('id')->on('product_variants');
            // $table->foreign('branch_id')->references('id')->on('store_branches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopping_list_products');
    }
}
