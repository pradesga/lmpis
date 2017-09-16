<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contact', function(Blueprint $table)
		{
			$table->foreign('contact_type_id', 'contact_ibfk_1')->references('contact_type_id')->on('contact_type')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contact', function(Blueprint $table)
		{
			$table->dropForeign('contact_ibfk_1');
		});
	}

}
