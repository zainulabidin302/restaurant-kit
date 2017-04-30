<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderitemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orderitem', function(Blueprint $table)
		{
			$table->foreign('shipper_id', 'FKOrderItem188784')->references('id')->on('employee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Ingredientid', 'FKOrderItem321593')->references('id')->on('ingredient')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Addressid', 'FKOrderItem580871')->references('id')->on('address')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('cook_id', 'FKOrderItem599836')->references('id')->on('employee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('waiter_id', 'FKOrderItem738063')->references('id')->on('employee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Orderid', 'FKOrderItem73813')->references('id')->on('order')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orderitem', function(Blueprint $table)
		{
			$table->dropForeign('FKOrderItem188784');
			$table->dropForeign('FKOrderItem321593');
			$table->dropForeign('FKOrderItem580871');
			$table->dropForeign('FKOrderItem599836');
			$table->dropForeign('FKOrderItem738063');
			$table->dropForeign('FKOrderItem73813');
		});
	}

}
