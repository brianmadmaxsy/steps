<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Freshmenrequirements extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('freshmen_requirements',function($table){
			$table->increments('id');
			$table->string('requirementsid');
			$table->string('userid');
			$table->string('oas_username');
			$table->string('highschoolcard'); //Highschool ID
			$table->string('GM'); //Good Moral Certificate
			$table->string('NSO'); //NSO Birth Certificate
			$table->string('NCAE'); //NCAE Result
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
		Schema::drop('freshmen_requirements');
	}

}
