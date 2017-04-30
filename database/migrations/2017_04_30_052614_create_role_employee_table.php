<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleEmployeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('role_employee', function(Blueprint $table)
		{
			$table->integer('Roleid')->index('FKRole_Emplo537256');
			$table->integer('Employeeid')->index('FKRole_Emplo104651');
			$table->primary(['Roleid','Employeeid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('role_employee');
	}

}
