<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('payment_type')->nullable();
			$table->integer('transaction_id')->nullable();
			$table->integer('cr')->nullable();
			$table->integer('dt')->nullable();
			$table->integer('account_number')->nullable();
			$table->integer('branch_code')->nullable();
			$table->integer('account_holder_name')->nullable();
			$table->integer('account_holder_cnic')->nullable();
			$table->integer('account_holder_address')->nullable();
			$table->integer('Bankid')->index('FKPayment441796');
			$table->integer('Cardid')->index('FKPayment670271');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('payment');
	}

}
