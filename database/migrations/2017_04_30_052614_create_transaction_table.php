<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaction', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('transaction_status')->nullable();
			$table->string('comments')->nullable();
			$table->integer('transaction_from')->nullable();
			$table->integer('transaction_to')->nullable();
			$table->string('reference')->nullable();
			$table->float('cr', 10, 0)->nullable();
			$table->integer('dr')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transaction');
	}

}
