<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDealRecipiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('deal_recipies', function(Blueprint $table)
		{
			$table->foreign('recipie_id', 'FKdeal_recip239152')->references('id')->on('recipies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('deal_id', 'FKdeal_recip26012')->references('id')->on('deal')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('deal_recipies', function(Blueprint $table)
		{
			$table->dropForeign('FKdeal_recip239152');
			$table->dropForeign('FKdeal_recip26012');
		});
	}

}
