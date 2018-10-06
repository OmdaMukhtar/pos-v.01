<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code')->unique();
            $table->string('address');
            $table->integer('country');
            $table->integer('city');
            $table->string('phone');
            $table->string('fax');
            $table->string('email')->unique();
            $table->string('facebook');
            $table->string('note');
            $table->string('debit');
            $table->string('credit');
            $table->string('balance');
            $table->string('state');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incomers');
    }
}
