<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref');
            $table->string('title');
            $table->string('description');
            $table->string('photo');
            $table->string('section');
            $table->string('metatitle');
            $table->string('metakey');
            $table->string('metadesc');
            $table->string('metacanonical');
            $table->dateTime('deleted_at');
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
        Schema::dropIfExists('servises');
    }
}
