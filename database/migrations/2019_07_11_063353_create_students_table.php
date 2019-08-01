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
        Schema::create('students', function (Blueprint $t) {
            $t->engine = "InnoDB";
            $t->bigIncrements('id');
            $t->string('first_name');
            $t->string('last_name')->nullable();
            $t->string('class');
            $t->enum('gender',['male','female','other'])->default('other');
            $t->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('students');
    }
}
