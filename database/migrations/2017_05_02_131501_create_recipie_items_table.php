<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecipieItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipie_items', function(Blueprint $table)
		{
			$table->integer('recipie_id')->index('FKrecipie_it579617');
			$table->integer('ingredient_id')->index('FKrecipie_it258862');
			$table->integer('quantity')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recipie_items');
	}

}
