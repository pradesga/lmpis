<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContactEmailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contact_email', function(Blueprint $table)
		{
			$table->foreign('contact_id', 'contact_email_ibfk_1')->references('contact_id')->on('contact')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('email_id', 'contact_email_ibfk_2')->references('email_id')->on('email')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contact_email', function(Blueprint $table)
		{
			$table->dropForeign('contact_email_ibfk_1');
			$table->dropForeign('contact_email_ibfk_2');
		});
	}

}
