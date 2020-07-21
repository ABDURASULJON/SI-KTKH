<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulingsTable extends Migration
{
    public function up()
    {Schema::create('schedulings', function (Blueprint $table) {
            $table->bigIncrements('schedule_id');
            $table->integer('course_id');
            $table->integer('level_id');
            $table->integer('shift_id');
            $table->integer('classroom_id');
            $table->integer('batch_id');
            $table->integer('day_id');
            $table->integer('time_id');
            $table->integer('teacher_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->tinyInteger('status')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });}
    public function down()
    {
        Schema::dropIfExists('schedulings');
    }
}