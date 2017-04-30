<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('role', function(Blueprint $table)
		{
			$table->foreign('Departmentid', 'FKRole709125')->references('id')->on('department')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('role', function(Blueprint $table)
		{
			$table->dropForeign('FKRole709125');
		});
	}

}
