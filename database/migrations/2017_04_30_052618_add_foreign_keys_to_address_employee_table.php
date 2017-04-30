<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAddressEmployeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('address_employee', function(Blueprint $table)
		{
			$table->foreign('Employeeid', 'FKAddress_Em545355')->references('id')->on('employee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Addressid', 'FKAddress_Em685015')->references('id')->on('address')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('address_employee', function(Blueprint $table)
		{
			$table->dropForeign('FKAddress_Em545355');
			$table->dropForeign('FKAddress_Em685015');
		});
	}

}
