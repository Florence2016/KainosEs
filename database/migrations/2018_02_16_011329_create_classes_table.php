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
            $table->increments('class_id',true);
            $table->unSignedInteger('subject_id')->nullable();
            $table->unSignedInteger('level_id')->nullable();
            $table->unSignedInteger('shift_id')->nullable();
            $table->unSignedInteger('time_id')->nullable();
            $table->unSignedInteger('group_id')->nullable();
            $table->unSignedInteger('batch_id')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('active');
            
        });

        Schema::table('classes', function($table){
            $table->foreign('subject_id')->references('subject_id')->on('subjects');
            $table->foreign('level_id')->references('level_id')->on('yearlevels');
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
