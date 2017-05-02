<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPurchaseorderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('purchaseorder', function(Blueprint $table)
		{
			$table->foreign('order_confirmed_by', 'FKPurchaseOr315753')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supply_to', 'FKPurchaseOr456301')->references('id')->on('addresses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('supplier_id', 'FKPurchaseOr576023')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('purchaseorder', function(Blueprint $table)
		{
			$table->dropForeign('FKPurchaseOr315753');
			$table->dropForeign('FKPurchaseOr456301');
			$table->dropForeign('FKPurchaseOr576023');
		});
	}

}
