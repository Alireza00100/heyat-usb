<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArchiveManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivemanagement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',100);
            $table->string('sub',100);
            $table->string('year',4);
            $table->string('daytime',10);
            $table->string('type',4);
            $table->string('media_type',10);
            $table->string('media_url');
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
