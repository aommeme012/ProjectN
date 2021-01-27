<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_order_details', function (Blueprint $table) {
            $table->bigincrements('Pdetail_Id', 5);
            $table->integer('Pdetail_Amount');
            $table->unsignedBigInteger('Material_Id');
            $table->foreign('Material_Id')->references('Material_Id')->on('materials')->ondelete('cascase');
            $table->unsignedBigInteger('Purchase_Id');
            $table->foreign('Purchase_Id')->references('Purchase_Id')->on('purchase_orders')->ondelete('cascase');
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
        Schema::dropIfExists('purchase_order_details');
    }
}
