<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $t) {
            $t->engine = "InnoDB";
            $t->bigIncrements('id');
            $t->string('title')->nullable();
            $t->timestamp('begin')->default('2019-09-15 08:00:00');
            $t->timestamp('end')->default('2010-05-31 15:00:00');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journals');
    }
}
