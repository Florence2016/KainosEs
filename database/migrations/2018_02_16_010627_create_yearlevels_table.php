<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearlevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yearlevels', function (Blueprint $table) {
            $table->increments('level_id',true);
            $table->string('level',100);
            $table->string('description',100)->nullable();
            $table->integer('program_id')->unsigned();
            
        });


        Schema::table('yearlevels', function($table){
            $table->foreign('program_id')->references('program_id')->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yearlevels');
    }
}
