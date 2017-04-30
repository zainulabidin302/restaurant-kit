<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGalleryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gallery', function(Blueprint $table)
		{
			$table->foreign('Recipieid', 'FKGallery476160')->references('id')->on('recipie')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gallery', function(Blueprint $table)
		{
			$table->dropForeign('FKGallery476160');
		});
	}

}
