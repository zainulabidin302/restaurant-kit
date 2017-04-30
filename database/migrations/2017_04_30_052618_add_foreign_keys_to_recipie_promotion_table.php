<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRecipiePromotionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recipie_promotion', function(Blueprint $table)
		{
			$table->foreign('Recipieid', 'FKRecipie_Pr453619')->references('id')->on('recipie')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Promotionid', 'FKRecipie_Pr72797')->references('id')->on('promotion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recipie_promotion', function(Blueprint $table)
		{
			$table->dropForeign('FKRecipie_Pr453619');
			$table->dropForeign('FKRecipie_Pr72797');
		});
	}

}
