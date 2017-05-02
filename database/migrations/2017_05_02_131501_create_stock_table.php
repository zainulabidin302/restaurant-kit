<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stock', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('stock_in_qty')->nullable();
			$table->integer('stock_out_qty')->nullable();
			$table->integer('employee_id')->index('FKStock889974');
			$table->dateTime('created')->nullable();
			$table->dateTime('updated')->nullable();
			$table->dateTime('deleted')->nullable();
			$table->integer('supplier_id')->index('FKStock650850');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stock');
	}

}
