<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToConverstionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('converstions', function(Blueprint $table)
		{
			$table->foreign('fromUnitid', 'FKconverstio691424')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('converstions', function(Blueprint $table)
		{
			$table->dropForeign('FKconverstio691424');
		});
	}

}
