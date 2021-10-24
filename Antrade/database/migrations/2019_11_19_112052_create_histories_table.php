<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->String('buyer_email');
            $table->String('seller_email');
            $table->bigInteger('offered_productcode')->unsigned();
            $table->bigInteger('wanted_productcode')->unsigned();
            $table->foreign('buyer_email')->references('email')->on('users');
            $table->foreign('seller_email')->references('email')->on('users');
            $table->foreign('offered_productcode')->references('productcode')->on('products');
            $table->foreign('wanted_productcode')->references('productcode')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
