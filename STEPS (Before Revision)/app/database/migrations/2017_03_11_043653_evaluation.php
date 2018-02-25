<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Evaluation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
		Evaluation table
		-id AI
		-evaluationid
		-userid
		-evaluator_username
		-course
		-department
		-status
		-comment
		*/
		Schema::create('Evaluation',function($table){
			$table->increments('id');
			$table->string('evaluationid');
			$table->string('userid');
			$table->string('evaluator_name');
			$table->string('course');
			$table->string('department');
			$table->string('status');
			$table->string('comment');
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
		Schema::drop('Evaluation');
	}

}
