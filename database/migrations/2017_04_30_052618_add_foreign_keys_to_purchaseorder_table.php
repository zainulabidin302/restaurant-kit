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
			$table->foreign('supply_to', 'FKPurchaseOr126854')->references('id')->on('address')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Supplierid', 'FKPurchaseOr425562')->references('id')->on('supplier')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
			$table->dropForeign('FKPurchaseOr126854');
			$table->dropForeign('FKPurchaseOr425562');
		});
	}

}
