<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionPaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaction_payment', function(Blueprint $table)
		{
			$table->integer('Transactionid')->index('FKTransactio42015');
			$table->integer('Paymentid')->index('FKTransactio30627');
			$table->primary(['Transactionid','Paymentid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transaction_payment');
	}

}
