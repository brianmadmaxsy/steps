<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entranceexam extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
EntranceExam
-id
-entranceexamid
-userid
-guidance_username
-schedule
-status
		*/
		Schema::create('EntranceExam',function($table){
			$table->increments('id');
			$table->string('entranceexamid');
			$table->string('userid');
			$table->string('guidance_username');
			$table->string('schedule');
			$table->string('status');
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
		Schema::drop('EntranceExam');
	}

}
