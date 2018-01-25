<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Identification extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
Identification
-id AI
-userid
-oas_username
-status(True, False)
		*/
		Schema::create('Identification',function($table){
			$table->increments('id');
			$table->string('userid');
			$table->string('oas_username');
			$table->string('getIdentification');
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
		Schema::drop('Identification');
	}

}
