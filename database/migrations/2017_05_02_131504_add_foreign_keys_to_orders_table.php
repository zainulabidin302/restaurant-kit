<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orders', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'FKorders267488')->references('id')->on('customers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('transaction_id', 'FKorders35850')->references('id')->on('transaction')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('address_id', 'FKorders833566')->references('id')->on('addresses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orders', function(Blueprint $table)
		{
			$table->dropForeign('FKorders267488');
			$table->dropForeign('FKorders35850');
			$table->dropForeign('FKorders833566');
		});
	}

}
