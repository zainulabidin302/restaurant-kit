<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDealRecipieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('deal_recipie', function(Blueprint $table)
		{
			$table->foreign('Recipieid', 'FKDeal_Recip185616')->references('id')->on('recipie')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Dealid', 'FKDeal_Recip755843')->references('id')->on('deal')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('deal_recipie', function(Blueprint $table)
		{
			$table->dropForeign('FKDeal_Recip185616');
			$table->dropForeign('FKDeal_Recip755843');
		});
	}

}
