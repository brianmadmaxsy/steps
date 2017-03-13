<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admin extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
School Admin
-id AI
-userid
-adminid
-firstname
-middlename
-lastname
-username
-password
-email
-contact
-department
-position
-birthdate -birth_month -birth_day -birth_year
-Education
-Past University

		*/
		Schema::create('Admin',function($table){
			$table->increments('id');
			$table->string('userid');
			$table->string('adminid');
			$table->string('firstname');
			$table->string('middlename');
			$table->string('lastname');
			$table->string('username');
			$table->string('password');
			$table->string('email');
			$table->string('contact');
			$table->string('department');
			$table->string('position');
			$table->string('birthdate');
			$table->string('education');
			$table->string('pastuniversity');
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
		Schema::drop('Admin');
	}

}
