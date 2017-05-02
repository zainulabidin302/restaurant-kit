<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDealRecipieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deal_recipie', function(Blueprint $table)
		{
			$table->integer('Dealid')->index('FKDeal_Recip755843');
			$table->integer('Recipieid')->index('FKDeal_Recip717378');
			$table->primary(['Dealid','Recipieid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('deal_recipie');
	}

}
