<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToContactPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_phone', function (Blueprint $table) {
            $table->foreign('contact_id', 'contact_phone_ibfk_1')->references('id')->on('contacts')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('phone_id', 'contact_phone_ibfk_2')->references('id')->on('phones')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_phone');
    }
}
