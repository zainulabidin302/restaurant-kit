<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecipieitemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipieitem', function(Blueprint $table)
		{
			$table->integer('Ingredientid')->index('has');
			$table->integer('Recipieid')->index('FKRecipieIte953728');
			$table->integer('quantity')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recipieitem');
	}

}
