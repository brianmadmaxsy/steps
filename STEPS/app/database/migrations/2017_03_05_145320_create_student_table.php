<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
			id
			studentid
			firstname
			middlename
			lastname
			username
			email
			password
			birthdate -birth-month, birth-day, birth-year
			birthplace
			gender
			civilstatus
			contact
			homeaddress
			provincialaddress
			schoolyear
			semester
			tocourse
			fromcourse
			fromschool
		*/
		Schema::create('student',function($table){
			$table->increments('id');
			$table->string('userid');
			$table->string('studentid');
			$table->string('firstname');
			$table->string('middlename');
			$table->string('lastname');
			$table->string('username');
			$table->string('email');
			$table->string('password');
			$table->string('birthdate');
			$table->string('birthplace');
			$table->string('gender');
			$table->string('civilstatus');
			$table->string('contact');
			$table->string('homeaddress');
			$table->string('provincialaddress');
			$table->string('schoolyear');
			$table->string('semester');
			$table->string('department');
			$table->string('studenttype');
			$table->string('steps_status');
			$table->integer('step_number');
			$table->string('picture');
			$table->rememberToken();
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
		Schema::drop('student');
	}

}
