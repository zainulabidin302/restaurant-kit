<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRecipieitemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recipieitem', function(Blueprint $table)
		{
			$table->foreign('Recipieid', 'FKRecipieIte953728')->references('id')->on('recipie')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Ingredientid', 'has')->references('id')->on('ingredient')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recipieitem', function(Blueprint $table)
		{
			$table->dropForeign('FKRecipieIte953728');
			$table->dropForeign('has');
		});
	}

}
