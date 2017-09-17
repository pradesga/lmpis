<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToContactAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_address', function (Blueprint $table) {
            $table->foreign('contact_id', 'contact_address_ibfk_1')->references('id')->on('contacts')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('address_id', 'contact_address_ibfk_2')->references('id')->on('addresses')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_address');
    }
}
