<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddattendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addattendances', function (Blueprint $table) {
            $table->id();
            $table->string('student_name')->nullable();
            $table->string('date')->nullable();         
            $table->string('lecture_name')->nullable();        
            $table->string('grade')->nullable();
         
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
        Schema::dropIfExists('addattendances');
    }
}
