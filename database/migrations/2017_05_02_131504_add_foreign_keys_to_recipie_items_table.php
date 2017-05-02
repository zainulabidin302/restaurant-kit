<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRecipieItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recipie_items', function(Blueprint $table)
		{
			$table->foreign('ingredient_id', 'FKrecipie_it258862')->references('id')->on('ingredients')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('recipie_id', 'FKrecipie_it579617')->references('id')->on('recipies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recipie_items', function(Blueprint $table)
		{
			$table->dropForeign('FKrecipie_it258862');
			$table->dropForeign('FKrecipie_it579617');
		});
	}

}
