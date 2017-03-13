<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Results extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
ExamResult
-id
-examresultid
-userid
-guidance_username
-IQTest
-MathTest
-EnglishTest
-status (true,false)
		*/
		Schema::create('Results',function($table){
			$table->increments('id');
			$table->string('resultid');
			$table->string('userid');
			$table->string('guidance_username');
			$table->string('IQTest');
			$table->string('MathTest');
			$table->string('EnglishTest');
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
		Schema::drop('Results');
	}

}
