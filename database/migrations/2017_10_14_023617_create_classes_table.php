<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('class_id');
            $table->unsignedInteger('academic_id');
            $table->unsignedInteger('level_id');
            $table->unsignedInteger('shift_id');
            $table->unsignedInteger('time_id');
            $table->unsignedInteger('group_id');
            $table->unsignedInteger('batch_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('active');
            $table->timestamps();
            $table->foreign('academic_id')->references('academic_id')->on('academics');
            $table->foreign('level_id')->references('level_id')->on('levels');
            $table->foreign('shift_id')->references('shift_id')->on('shifts');
            $table->foreign('time_id')->references('time_id')->on('times');
            $table->foreign('group_id')->references('group_id')->on('groups');
            $table->foreign('batch_id')->references('batch_id')->on('batches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
