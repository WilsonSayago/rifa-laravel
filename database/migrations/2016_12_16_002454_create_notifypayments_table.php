<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotifypaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifypayments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_purchase')->unsigned();
            $table->string('nro_referencia');
            $table->float('monto');
            $table->string('ci');
            $table->enum('banco',['Banesco', 'Provincial','Mercantil','Bicentenario', 'Venezuela']);

            $table->foreign('id_purchase')->references('id')->on('purchases');
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
        Schema::drop('notifypayments');
    }
}
