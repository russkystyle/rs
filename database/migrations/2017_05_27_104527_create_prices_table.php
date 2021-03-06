<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref');
            $table->string('title');
            $table->text('description');
            $table->string('photo_1');
            $table->string('photo_2');
            $table->string('price_base');
            $table->string('price_discount');
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
        Schema::dropIfExists('prices');
    }
}
