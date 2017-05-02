<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDealRecipiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deal_recipies', function(Blueprint $table)
		{
			$table->integer('recipie_id')->index('FKdeal_recip239152');
			$table->integer('deal_id')->index('FKdeal_recip26012');
			$table->timestamps();
			$table->softDeletes();
			$table->primary(['recipie_id','deal_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('deal_recipies');
	}

}
