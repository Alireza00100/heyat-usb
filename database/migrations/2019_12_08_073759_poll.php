<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Poll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poll', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('rite_id');
            $table->foreign('rite_id')->references('id')->on('rite');

            $table->string('orator',1); // سخنران
            $table->string('singer',1); // مداح
            $table->string('entertainment',1); // محتوای فرهنگی
            $table->string('reception',1); // پذیرایی
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
