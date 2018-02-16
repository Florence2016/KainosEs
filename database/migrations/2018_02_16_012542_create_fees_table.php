<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->increments('fee_id', true);
            $table->unSignedInteger('subject_id')->nullable();
            $table->unSignedInteger('level_id')->nullable();
            $table->unSignedInteger('fee_type_id')->nullable();
            $table->string('fee_heading',100)->nullable();
            $table->float('amount',8,2);
            
        
        });

        Schema::table('fees', function($table){
            $table->foreign('subject_id')->references('subject_id')->on('subjects');
            $table->foreign('level_id')->references('level_id')->on('yearlevels');
            $table->foreign('fee_type_id')->references('fee_type_id')->on('feetypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
