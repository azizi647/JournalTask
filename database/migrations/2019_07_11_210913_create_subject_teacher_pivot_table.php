<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTeacherPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_teacher_pivot', function (Blueprint $t) {
            $t->engine = "InnoDB";
            $t->bigIncrements('id');
            $t->unsignedBigInteger('subjectID');
            $t->unsignedBigInteger('teacherID');
            $t->timestamps();

            /*
                1 fenn uzre ders deyen 1den cox ferqli muellim ola biler
                1 muellim 1den chox ferqli fenni de tedris ede biler
                misal ucun tarix muellimi az.tarixi ve orta esrleri deye bildiyi kimi
                cebr fennini eli ve veli adinda 2 muellim de kece biler
            */
            $t->foreign('subjectID')->references('id')->on('subjects');
            $t->foreign('teacherID')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_teacher_pivot');
    }
}
