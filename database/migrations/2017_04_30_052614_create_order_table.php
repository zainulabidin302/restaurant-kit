<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('created')->nullable();
			$table->dateTime('updated')->nullable();
			$table->dateTime('deleted')->nullable();
			$table->integer('remarks')->nullable();
			$table->integer('Customerid')->index('FKOrder558759');
			$table->integer('is_takeaway')->nullable();
			$table->integer('Addressid')->index('FKOrder37739');
			$table->integer('Transactionid')->index('FKOrder808805');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order');
	}

}
