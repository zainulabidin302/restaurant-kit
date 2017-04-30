<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('payment', function(Blueprint $table)
		{
			$table->foreign('Bankid', 'FKPayment441796')->references('id')->on('bank')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Cardid', 'FKPayment670271')->references('id')->on('card')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('payment', function(Blueprint $table)
		{
			$table->dropForeign('FKPayment441796');
			$table->dropForeign('FKPayment670271');
		});
	}

}
