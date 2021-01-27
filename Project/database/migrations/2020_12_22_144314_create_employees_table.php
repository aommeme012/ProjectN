<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigincrements('Emp_Id', 5);
            $table->String('Fname', 255);
            $table->String('Lname', 255);
            $table->String('Address', 255);
            $table->integer('Tel');
            $table->string('Sex', 10);
            $table->string('Username', 255);
            $table->string('Password', 255);
            $table->string('Emp_Status')->default('Enable');
            $table->boolean('type')->default(0);
            $table->unsignedBigInteger('Dep_Id');
            $table->foreign('Dep_Id')->references('Dep_Id')->on('departments')->ondelete('cascade');
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
        Schema::dropIfExists('employees');
    }
}
