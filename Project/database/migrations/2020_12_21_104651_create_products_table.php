<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigincrements('Product_Id', 5);
            $table->String('Product_Name', 255);
            $table->Integer('Product_Amount');
            $table->String('Product_Status', 10)->default('Enable');
            $table->unsignedBigInteger('Type_Id');
            $table->foreign('Type_Id')->references('Type_Id')->on('type_products')->ondelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
