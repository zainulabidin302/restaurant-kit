<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promotion', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title')->nullable();
			$table->string('code')->nullable();
			$table->dateTime('created')->nullable();
			$table->dateTime('updated')->nullable();
			$table->dateTime('deleted')->nullable();
			$table->dateTime('expires')->nullable();
			$table->integer('is_active')->nullable();
			$table->float('percentage', 10, 0)->nullable();
			$table->float('fix_amount', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('promotion');
	}

}
