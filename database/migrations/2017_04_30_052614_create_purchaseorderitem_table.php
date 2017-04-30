<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchaseorderitemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchaseorderitem', function(Blueprint $table)
		{
			$table->integer('PurchaseOrderid')->index('FKPurchaseOr433276');
			$table->integer('Ingredientid')->index('FKPurchaseOr813023');
			$table->float('quantity', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchaseorderitem');
	}

}
