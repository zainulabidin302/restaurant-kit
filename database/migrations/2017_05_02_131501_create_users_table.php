<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->string('password')->nullable();
			$table->integer('is_company')->nullable();
			$table->string('name')->nullable();
			$table->string('remember_token')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->text('image_url', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
