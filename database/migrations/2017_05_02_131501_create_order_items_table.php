<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_items', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('quantity');
			$table->float('price', 10, 0)->nullable();
			$table->integer('shipping_eta')->nullable();
			$table->integer('cooking_eta')->nullable();
			$table->string('comments')->nullable();
			$table->integer('promotion_availed')->nullable();
			$table->integer('address_id')->nullable()->index('FKorder_item341025');
			$table->integer('shipper_id')->nullable()->index('FKorder_item394178');
			$table->integer('cook_id')->nullable()->index('FKorder_item182799');
			$table->integer('waiter_id')->nullable()->index('FKorder_item155101');
			$table->integer('order_id')->index('FKorder_item407742');
			$table->integer('recipie_id')->index('FKorder_item896156');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_items');
	}

}
