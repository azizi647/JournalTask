<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $t) {
            $t->bigIncrements('id');
            $t->unsignedBigInteger('studentID');
            $t->integer('teacherID')->nullable();
            $t->unsignedBigInteger('subjectID');
            $t->integer('dayID')->nullable();
            $t->integer('journalID')->nullable();
            $t->enum('grade',[1,2,3,4,5,'ie','qb'])->default('ie');
            $t->timestamps();


            $t->foreign('studentID')->references('id')->on('students');
            $t->foreign('subjectID')->references('id')->on('subjects');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
