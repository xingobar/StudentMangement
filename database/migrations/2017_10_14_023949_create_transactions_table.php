<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacations', function (Blueprint $table) {
            $table->increments('transact_id');
            $table->dateTime('transaction_date');
            $table->unsignedInteger('fee_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('s_fee_id');
            $table->float('paid',8,2);
            $table->string('remark',50)->nullable();
            $table->string('description',200)->nullable();
            $table->foreign('fee_id')
                  ->references('fee_id')->on('fees');
            $table->foreign('user_id')
                  ->references('id')->on('users');
            $table->foreign('student_id')
                  ->references('student_id')->on('students');
            $table->foreign('s_fee_id')
                   ->references('s_fee_id')->on('studentfees');
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
        Schema::dropIfExists('transacations');
    }
}
