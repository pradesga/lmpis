<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPhoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('phone', function(Blueprint $table)
		{
			$table->foreign('phone_type_id', 'phone_ibfk_1')->references('phone_type_id')->on('phone_type')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('phone', function(Blueprint $table)
		{
			$table->dropForeign('phone_ibfk_1');
		});
	}

}
