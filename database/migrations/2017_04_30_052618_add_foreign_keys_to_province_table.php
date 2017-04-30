<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProvinceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('province', function(Blueprint $table)
		{
			$table->foreign('Countryid', 'FKProvince300459')->references('id')->on('country')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('province', function(Blueprint $table)
		{
			$table->dropForeign('FKProvince300459');
		});
	}

}
