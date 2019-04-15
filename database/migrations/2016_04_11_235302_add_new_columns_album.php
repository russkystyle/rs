<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnsAlbum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photo_albums', function (Blueprint $table) {
            //
            $table->string('slug')->after('name');
            $table->boolean('published')->after('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photo_albums', function (Blueprint $table) {
            //
            $table->dropColumn('slug');
            $table->dropColumn('published');
        });
    }
}
