<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankaccounts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user')->unsigned();
            $table->string('nro');
            $table->enum('banco',['Banesco', 'Provincial','Mercantil','Bicentenario', 'Venezuela']);
            $table->enum('tipo',['Ahorro', 'Corriente']);
            $table->string('email');
            $table->string('titular');

            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::drop('bankaccounts');
    }
}
