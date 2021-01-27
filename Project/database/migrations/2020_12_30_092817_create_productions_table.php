<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->bigincrements('Production_Id', 5);
            $table->date('Production_Date');
            $table->string('Production_Status')->default('Enable');
            $table->unsignedBigInteger('Requismat_Id');
            $table->foreign('Requismat_Id')->references('Requismat_Id')->on('requisition_materials')->ondelete('cascase');
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
        Schema::dropIfExists('productions');
    }
}
