<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('remarks')->nullable();
			$table->integer('is_takeaway')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('customer_id')->nullable()->index('FKorders267488');
			$table->integer('address_id')->nullable()->index('FKorders833566');
			$table->integer('transaction_id')->nullable()->index('FKorders35850');
			$table->string('uuid')->nullable()->unique('uuid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
