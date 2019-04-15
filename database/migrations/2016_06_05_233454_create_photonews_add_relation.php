<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotonewsAddRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photo_news', function (Blueprint $table) {
            //
            $table->foreign('news_album_id')
                    ->references('id')
                    ->on('news')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photo_news', function (Blueprint $table) {
            //
            $table->dropForeign('news_album_id');
        });
    }
}
