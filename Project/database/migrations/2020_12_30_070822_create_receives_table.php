<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receives', function (Blueprint $table) {
            $table->bigincrements('Receive_Id', 5);
            $table->date('Receive_Date');
            $table->integer('Receive_Amount');
            $table->unsignedBigInteger('Emp_Id');
            $table->foreign('Emp_Id')->references('Emp_Id')->on('employees')->ondelete('cascase');
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
        Schema::dropIfExists('receives');
    }
}
