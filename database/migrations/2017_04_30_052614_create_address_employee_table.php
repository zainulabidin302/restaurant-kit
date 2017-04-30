<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressEmployeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('address_employee', function(Blueprint $table)
		{
			$table->integer('Addressid')->index('FKAddress_Em685015');
			$table->integer('Employeeid')->index('FKAddress_Em545355');
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
		Schema::drop('address_employee');
	}

}
