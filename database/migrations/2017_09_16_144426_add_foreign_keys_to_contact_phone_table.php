<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContactPhoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contact_phone', function(Blueprint $table)
		{
			$table->foreign('contact_id', 'contact_phone_ibfk_1')->references('contact_id')->on('contact')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('phone_id', 'contact_phone_ibfk_2')->references('phone_id')->on('phone')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contact_phone', function(Blueprint $table)
		{
			$table->dropForeign('contact_phone_ibfk_1');
			$table->dropForeign('contact_phone_ibfk_2');
		});
	}

}
