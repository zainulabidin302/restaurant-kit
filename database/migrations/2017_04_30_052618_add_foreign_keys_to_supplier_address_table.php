<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSupplierAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('supplier_address', function(Blueprint $table)
		{
			$table->foreign('Supplierid', 'FKSupplier_A324931')->references('id')->on('supplier')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Addressid', 'FKSupplier_A98109')->references('id')->on('address')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('supplier_address', function(Blueprint $table)
		{
			$table->dropForeign('FKSupplier_A324931');
			$table->dropForeign('FKSupplier_A98109');
		});
	}

}
