<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Examschedulelist extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('examschedulelist',function($table){
			$table->increments('id');
			$table->string('scheduleid');
			$table->string('schedule_day');
			$table->string('schedule_date');
			$table->string('schedule_time');
			$table->string('facilitator');
			$table->string('guidance_username');
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
		Schema::drop('examschedulelist');
	}

}
