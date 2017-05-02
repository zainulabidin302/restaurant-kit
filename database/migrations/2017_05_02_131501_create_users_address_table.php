<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_address', function(Blueprint $table)
		{
			$table->integer('Addressid')->index('FKusers_addr175941');
			$table->integer('Employeeid')->index('FKusers_addr815897');
			$table->primary(['Addressid','Employeeid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_address');
	}

}
