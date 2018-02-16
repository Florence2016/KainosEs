<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->increments('receipt_id', true);
            $table->unSignedInteger('transaction_id')->nullable();
            $table->unSignedInteger('student_id')->nullable();
        });

        Schema::table('receipts', function($table){
            $table->foreign('transaction_id')->references('transaction_id')->on('transactions');
            $table->foreign('student_id')->references('student_id')->on('students');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipts');
    }
}
