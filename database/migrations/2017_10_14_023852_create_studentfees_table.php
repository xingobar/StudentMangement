<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentfeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentfees', function (Blueprint $table) {
            $table->increments('s_fee_id');
            $table->unsignedInteger('fee_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('level_id');
            $table->float('amount');
            $table->foreign('fee_id')
                  ->references('fee_id')->on('fees');
            $table->foreign('student_id')
                  ->references('student_id')->on('students');
            $table->foreign('level_id')
                  ->references('level_id')->on('levels');
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
        Schema::dropIfExists('studentfees');
    }
}
