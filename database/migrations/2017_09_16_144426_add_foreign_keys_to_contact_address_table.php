<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContactAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contact_address', function(Blueprint $table)
		{
			$table->foreign('contact_id', 'contact_address_ibfk_1')->references('contact_id')->on('contact')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('address_id', 'contact_address_ibfk_2')->references('address_id')->on('address')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contact_address', function(Blueprint $table)
		{
			$table->dropForeign('contact_address_ibfk_1');
			$table->dropForeign('contact_address_ibfk_2');
		});
	}

}
