<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedetail', function (Blueprint $table) {
            $table->id();
            $table->string('fee_id')->unique();
            $table->string('record_number')->unique();
            $table->string('student_number')->unique();
            $table->string('year')->nullable();
            $table->string('grade')->nullable();
            $table->string('received_by')->nullable();
            $table->string('paid_on')->nullable();
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
        Schema::dropIfExists('feedetail');
    }
}
