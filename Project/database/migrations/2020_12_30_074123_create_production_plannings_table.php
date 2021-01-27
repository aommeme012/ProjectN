<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionPlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_plannings', function (Blueprint $table) {
            $table->bigincrements('Plan_Id');
            $table->date('Plan_Date');
            $table->integer('Amount');
            $table->unsignedBigInteger('component_Id');
            $table->foreign('component_Id')->references('component_Id')->on('components')->ondelete('cascase');
            $table->unsignedBigInteger('Product_Id');
            $table->foreign('Product_Id')->references('Product_Id')->on('products')->ondelete('cascase');
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
        Schema::dropIfExists('production_plannings');
    }
}
