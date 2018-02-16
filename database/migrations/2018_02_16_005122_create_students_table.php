<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id',true);
            $table->unSignedInteger('user_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->boolean('gender');
            $table->date('birthdate');
            $table->integer('mobile', false, true)->length(11);
            $table->string('address')->nullable();
            $table->string('church')->nullable(); 
            $table->date('dateenrolled');
            
            $table->string('image',200)->nullable();
        });

        Schema::table('students', function($table){
            $table->foreign('user_id')->references('id')->on('users');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
