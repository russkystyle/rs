<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhotoalbumColumns extends Migration
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
            $table->string('path')->after('published');
            $table->string('preload_path')->after('path');
            $table->string('shortcut_path')->after('preload_path');
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
            $table->dropColumn('path');
            $table->dropColumn('preload_path');
            $table->dropColumn('shortcut_path');
        });
    }
}
