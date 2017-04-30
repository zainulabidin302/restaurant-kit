<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRoleEmployeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('role_employee', function(Blueprint $table)
		{
			$table->foreign('Employeeid', 'FKRole_Emplo104651')->references('id')->on('employee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Roleid', 'FKRole_Emplo537256')->references('id')->on('role')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('role_employee', function(Blueprint $table)
		{
			$table->dropForeign('FKRole_Emplo104651');
			$table->dropForeign('FKRole_Emplo537256');
		});
	}

}
