<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntermarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entermarks', function (Blueprint $table) {
            $table->id();
            $table->string('student_name')->nullable();
            $table->string('student_id')->unique();
            $table->string('subject_name')->nullable();
            $table->string('date')->nullable();
            $table->string('lecture_name');
            $table->string('exam_type');
            $table->string('marks');
            $table->string('grade');
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
        Schema::dropIfExists('entermarks');
    }
}
