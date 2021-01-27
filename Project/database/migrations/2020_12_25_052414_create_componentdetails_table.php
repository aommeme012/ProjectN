<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('componentdetails', function (Blueprint $table) {
            $table->Bigincrements('Comde_Id', 5);
            $table->integer('Comde_Amount');
            $table->unsignedBigInteger('Material_Id');
            $table->foreign('Material_Id')->references('Material_Id')->on('materials')->ondelete('cascade');
            $table->unsignedBigInteger('component_Id');
            $table->foreign('component_Id')->references('component_Id')->on('components')->ondelete('cascade');
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
        Schema::dropIfExists('componentdetails');
    }
}
