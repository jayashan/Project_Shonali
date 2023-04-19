<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddlessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addlessons', function (Blueprint $table) {
            $table->id();
            $table->string('subject_name')->nullable();
            $table->string('date')->nullable();
            $table->string('lecture_name');
            $table->string('lesson_description');
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
        Schema::dropIfExists('addlessons');
    }
}
