<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Payment extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
Payment table
-id AI
-paymentid
-userid
-oas_username
-receivedpayment (True,False)
		*/
		Schema::create('Payment',function($table){
			$table->increments('id');
			$table->string('paymentid');
			$table->string('userid');
			$table->string('oas_username');
			$table->string('paymentreceiptnum');
			$table->string('receivedpayment');
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
		Schema::drop('Payment');
	}

}
