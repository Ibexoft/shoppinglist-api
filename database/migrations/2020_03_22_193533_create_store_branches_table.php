<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_branches', function (Blueprint $table) {
            $table->id();   // branch id
            $table->foreignId('store_id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();  // It can be a physical address or a URL
            $table->string('map_location')->nullable();
            $table->foreignId('created_by')->nullable();
            $table->timestamps();

            $table->foreign('store_id')->references('id')->on('stores');
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
        Schema::dropIfExists('store_branches');
    }
}
