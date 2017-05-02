<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_address', function(Blueprint $table)
		{
			$table->foreign('Addressid', 'FKusers_addr175941')->references('id')->on('addresses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Employeeid', 'FKusers_addr815897')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_address', function(Blueprint $table)
		{
			$table->dropForeign('FKusers_addr175941');
			$table->dropForeign('FKusers_addr815897');
		});
	}

}
