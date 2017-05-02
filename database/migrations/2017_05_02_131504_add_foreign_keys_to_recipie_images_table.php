<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRecipieImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recipie_images', function(Blueprint $table)
		{
			$table->foreign('recipie_id', 'FKrecipie_im327016')->references('id')->on('recipies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recipie_images', function(Blueprint $table)
		{
			$table->dropForeign('FKrecipie_im327016');
		});
	}

}
