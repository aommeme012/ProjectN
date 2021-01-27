<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->bigincrements('Purchase_Id', 5);
            $table->date('Purchase_Date');
            $table->unsignedBigInteger('Emp_Id');
            $table->foreign('Emp_Id')->references('Emp_Id')->on('employees')->ondelete('cascade');
            $table->unsignedBigInteger('Partner_Id');
            $table->foreign('Partner_Id')->references('Partner_Id')->on('partners')->ondelete('cascade');
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
        Schema::dropIfExists('purchase_orders');
    }
}
