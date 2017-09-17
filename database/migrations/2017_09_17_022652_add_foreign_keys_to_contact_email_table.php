<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToContactEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_email', function (Blueprint $table) {
            $table->foreign('contact_id', 'contact_email_ibfk_1')->references('id')->on('contacts')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('email_id', 'contact_email_ibfk_2')->references('id')->on('emails')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_email');
    }
}
