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
			$table->integer('Recipieid')->index('FKRecipie_Pr453619');
			$table->integer('Promotionid')->index('FKRecipie_Pr72797');
			$table->primary(['Recipieid','Promotionid']);
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
