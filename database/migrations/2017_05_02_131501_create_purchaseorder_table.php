<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchaseorderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchaseorder', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('supply_to')->index('FKPurchaseOr456301');
			$table->integer('supplier_id')->index('FKPurchaseOr576023');
			$table->integer('order_confirmed_by')->index('FKPurchaseOr315753');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchaseorder');
	}

}
