<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThirdpartyapplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thirdpartyapplications', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('title')->nullable();
			$table->integer('config')->nullable();
			$table->float('price', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('thirdpartyapplications');
	}

}
