<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_number')->unique();
            $table->string('enroll_id')->unique();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('password');
            $table->string('address1');
            $table->string('address2');
            $table->string('is_active');
            $table->string('join_date');
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
        Schema::dropIfExists('students');
    }
}
