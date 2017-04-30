<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupplierAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('supplier_address', function(Blueprint $table)
		{
			$table->integer('Supplierid')->index('FKSupplier_A324931');
			$table->integer('Addressid')->index('FKSupplier_A98109');
			$table->primary(['Supplierid','Addressid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('supplier_address');
	}

}
