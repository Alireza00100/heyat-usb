<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rite', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',100);
            $table->string('year',4);
            $table->DateTime('startdate');
            $table->DateTime('enddate');
            $table->string('startTime',8);
            $table->string('orator',50);
            $table->string('singer',50);
            $table->string('status',1);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
