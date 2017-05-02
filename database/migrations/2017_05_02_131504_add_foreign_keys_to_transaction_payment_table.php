<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransactionPaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transaction_payment', function(Blueprint $table)
		{
			$table->foreign('Paymentid', 'FKTransactio30627')->references('id')->on('payment')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Transactionid', 'FKTransactio42015')->references('id')->on('transaction')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transaction_payment', function(Blueprint $table)
		{
			$table->dropForeign('FKTransactio30627');
			$table->dropForeign('FKTransactio42015');
		});
	}

}
