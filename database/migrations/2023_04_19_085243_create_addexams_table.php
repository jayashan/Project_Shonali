<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addexams', function (Blueprint $table) {
            $table->id();
            $table->string('subject_name')->nullable();
            $table->string('date')->nullable();
            $table->string('lecture_name');
            $table->string('grade');
            $table->string('exam_type');
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
        Schema::dropIfExists('addexams');
    }
}
