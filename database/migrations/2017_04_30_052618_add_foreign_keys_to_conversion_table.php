<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToConversionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('conversion', function(Blueprint $table)
		{
			$table->foreign('fromUnitid', 'FKConversion838463')->references('id')->on('unit')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('conversion', function(Blueprint $table)
		{
			$table->dropForeign('FKConversion838463');
		});
	}

}
