<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Examschedule extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
ExamSchedule
-id AI
-examscheduleid
-userid
-schedule
		*/
		Schema::create('ExamSchedule',function($table){
			$table->increments('id');
			$table->string('examscheduleid');
			$table->string('scheduleid');
			$table->string('userid');
			$table->string('schedule');
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
		Schema::drop('ExamSchedule');
	}

}
