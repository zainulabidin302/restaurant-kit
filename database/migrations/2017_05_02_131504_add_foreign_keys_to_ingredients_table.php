<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIngredientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ingredients', function(Blueprint $table)
		{
			$table->foreign('unit_id', 'FKingredient161506')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ingredients', function(Blueprint $table)
		{
			$table->dropForeign('FKingredient161506');
		});
	}

}
