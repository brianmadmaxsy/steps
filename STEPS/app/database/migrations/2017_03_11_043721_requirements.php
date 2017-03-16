<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Requirements extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
Requirements
-id AI
-requirementsid
-userid
-sao_username
-NSO
-COT
-GM
-TOR
-RF
-status

		*/
		Schema::create('Requirements',function($table){
			$table->increments('id');
			$table->string('requirementsid');
			$table->string('userid');
			$table->string('sao_username');
			$table->string('NSO');
			$table->string('COT');
			$table->string('GM');
			$table->string('TOR');
			$table->string('RF');
			$table->string('requirements_comment');
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
		Schema::drop('Requirements');
	}

}
