<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSurvey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_survey', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_name')->unique();// varchar(191)
            $table->string('student_email')->nullable();// varchar(255)
            $table->string('student_telephone')->nullable();
            $table->string('student_feedback')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_survey');
    }
}
