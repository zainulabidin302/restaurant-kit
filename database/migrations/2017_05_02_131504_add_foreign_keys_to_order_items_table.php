<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('order_items', function(Blueprint $table)
		{
			$table->foreign('waiter_id', 'FKorder_item155101')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('cook_id', 'FKorder_item182799')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('address_id', 'FKorder_item341025')->references('id')->on('addresses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('shipper_id', 'FKorder_item394178')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('order_id', 'FKorder_item407742')->references('id')->on('orders')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('recipie_id', 'FKorder_item896156')->references('id')->on('recipies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('order_items', function(Blueprint $table)
		{
			$table->dropForeign('FKorder_item155101');
			$table->dropForeign('FKorder_item182799');
			$table->dropForeign('FKorder_item341025');
			$table->dropForeign('FKorder_item394178');
			$table->dropForeign('FKorder_item407742');
			$table->dropForeign('FKorder_item896156');
		});
	}

}
