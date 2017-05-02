<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecipieImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipie_images', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('url')->nullable();
			$table->integer('media_type')->nullable();
			$table->integer('recipie_id')->index('FKrecipie_im327016');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recipie_images');
	}

}
