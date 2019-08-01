<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalDaySubjectXrefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_day_subject_xref', function (Blueprint $t) {
            $t->bigIncrements('id');
            $t->unsignedBigInteger('journalID')->index();
            $t->unsignedBigInteger('dayID')->index();
            $t->unsignedBigInteger('subjectID')->index();
            $t->tinyInteger('lessonOrder');
            $t->timestamps();

//            $t->foreign('journalID')->references('id')->on('journals');
            $t->foreign('dayID')->references('id')->on('days');
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
        Schema::dropIfExists('journal_day_subject_xref');
    }
}
