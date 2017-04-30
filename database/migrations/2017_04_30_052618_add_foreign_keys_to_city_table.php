<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('city', function(Blueprint $table)
		{
			$table->foreign('Provinceid', 'FKCity42920')->references('id')->on('province')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('city', function(Blueprint $table)
		{
			$table->dropForeign('FKCity42920');
		});
	}

}
