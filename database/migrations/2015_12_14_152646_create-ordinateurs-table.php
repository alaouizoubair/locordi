<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdinateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordinateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->integer('marque_id');
            $table->string('details');
            $table->string('caracterisqtique');
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
        Schema::drop('ordinateurs');
    }
}
