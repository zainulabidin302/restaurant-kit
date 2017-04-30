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
			$table->integer('Supplierid')->index('FKPurchaseOr425562');
			$table->integer('supply_to')->index('FKPurchaseOr126854');
			$table->integer('order_confirmed_by')->nullable();
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
