<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('address', function(Blueprint $table)
		{
			$table->foreign('Cityid', 'FKAddress205629')->references('id')->on('city')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('address', function(Blueprint $table)
		{
			$table->dropForeign('FKAddress205629');
		});
	}

}
