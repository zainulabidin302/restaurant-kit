<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('order', function(Blueprint $table)
		{
			$table->foreign('Addressid', 'FKOrder37739')->references('id')->on('address')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Customerid', 'FKOrder558759')->references('id')->on('customer')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Transactionid', 'FKOrder808805')->references('id')->on('transaction')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('order', function(Blueprint $table)
		{
			$table->dropForeign('FKOrder37739');
			$table->dropForeign('FKOrder558759');
			$table->dropForeign('FKOrder808805');
		});
	}

}
