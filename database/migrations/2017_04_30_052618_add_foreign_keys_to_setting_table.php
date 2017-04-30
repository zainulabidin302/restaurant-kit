<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSettingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('setting', function(Blueprint $table)
		{
			$table->foreign('Timezoneid', 'FKSetting594098')->references('id')->on('timezone')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('setting', function(Blueprint $table)
		{
			$table->dropForeign('FKSetting594098');
		});
	}

}
