<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPurchaseorderitemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('purchaseorderitem', function(Blueprint $table)
		{
			$table->foreign('PurchaseOrderid', 'FKPurchaseOr433276')->references('id')->on('purchaseorder')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Ingredientid', 'FKPurchaseOr813023')->references('id')->on('ingredient')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('purchaseorderitem', function(Blueprint $table)
		{
			$table->dropForeign('FKPurchaseOr433276');
			$table->dropForeign('FKPurchaseOr813023');
		});
	}

}
