<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('address', function(Blueprint $table)
		{
			$table->string('address_id', 255)->primary();
			$table->string('address_type_id', 255)->index('address_type_id');
			$table->string('address', 255);
			$table->text('description', 65535);
			$table->text('address_line_1', 65535);
			$table->text('address_line_2', 65535);
			$table->text('address_line_3', 65535);
			$table->string('city', 255);
			$table->string('province', 255);
			$table->string('postal_code', 255);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('address');
	}

}
