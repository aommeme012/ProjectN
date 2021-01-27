<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitionProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisition_products', function (Blueprint $table) {
            $table->bigincrements('Requispro_Id');
            $table->date('Requispro_Date');
            $table->integer('Requispro_Amount');
            $table->unsignedBigInteger('Product_Id');
            $table->foreign('Product_Id')->references('Product_Id')->on('products')->ondelete('cascase');
            $table->unsignedBigInteger('Emp_Id');
            $table->foreign('Emp_Id')->references('Emp_Id')->on('employees')->ondelete('cascase');
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
        Schema::dropIfExists('requisition_products');
    }
}
