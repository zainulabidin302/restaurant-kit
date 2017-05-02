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
			$table->foreign('promotion_id', 'FKrecipie_pr374188')->references('id')->on('promotions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('recipie_id', 'FKrecipie_pr499794')->references('id')->on('recipies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
			$table->dropForeign('FKrecipie_pr374188');
			$table->dropForeign('FKrecipie_pr499794');
		});
	}

}
