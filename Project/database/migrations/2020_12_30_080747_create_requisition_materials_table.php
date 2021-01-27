<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitionMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisition_materials', function (Blueprint $table) {
            $table->bigincrements('Requismat_Id', 5);
            $table->date('Requismat_Date');
            $table->integer('Requismat_Amount');
            $table->unsignedBigInteger('Material_Id');
            $table->foreign('Material_Id')->references('Material_Id')->on('materials')->ondelete('cascase');
            $table->unsignedBigInteger('Plan_Id');
            $table->foreign('Plan_Id')->references('Plan_Id')->on('production_plannings')->ondelete('cascase');
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
        Schema::dropIfExists('requisition_materials');
    }
}
