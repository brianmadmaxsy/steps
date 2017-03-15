<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Interview extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
Interview
-id
-interviewid
-userid
-schedule
-sao_username
-status (true,false)
-interview_comment
		*/
		Schema::create('Interview',function($table){
			$table->increments('id');
			$table->string('interviewid');
			$table->string('userid');
			$table->string('schedule');
			$table->string('sao_username');
			$table->string('status');
			$table->string('interview_comment');
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
		Schema::drop('Interview');
	}

}
