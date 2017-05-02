<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecipiePromotionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipie_promotion', function(Blueprint $table)
		{
			$table->integer('recipie_id')->index('FKrecipie_pr499794');
			$table->integer('promotion_id')->index('FKrecipie_pr374188');
			$table->primary(['recipie_id','promotion_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recipie_promotion');
	}

}
