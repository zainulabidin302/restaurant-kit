<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIngredientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ingredient', function(Blueprint $table)
		{
			$table->foreign('Unitid', 'FKIngredient41040')->references('id')->on('unit')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ingredient', function(Blueprint $table)
		{
			$table->dropForeign('FKIngredient41040');
		});
	}

}
