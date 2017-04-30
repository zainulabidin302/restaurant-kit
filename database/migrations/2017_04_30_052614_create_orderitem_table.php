<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderitemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orderitem', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('Orderid')->index('FKOrderItem73813');
			$table->integer('Ingredientid')->index('FKOrderItem321593');
			$table->integer('quantity')->nullable();
			$table->float('price', 10, 0)->nullable();
			$table->integer('shipping_eta')->nullable();
			$table->integer('cooking_eta')->nullable();
			$table->integer('Addressid')->index('FKOrderItem580871');
			$table->integer('shipper_id')->index('FKOrderItem188784');
			$table->integer('cook_id')->index('FKOrderItem599836');
			$table->integer('waiter_id')->index('FKOrderItem738063');
			$table->string('comments')->nullable();
			$table->integer('promotion_availed')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orderitem');
	}

}
