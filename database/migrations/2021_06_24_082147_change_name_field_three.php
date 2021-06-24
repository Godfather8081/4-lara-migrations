<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNameFieldThree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // we can rename field like this

        // Note:: for altring table we don't need doctrine/dbal package like for adding new field
        // for altring fields we need doctrine/dbal package like change attribute, rename, delete field etc
        // there are many table methods, columns methods, columns modifiers etc you can learn it hear
        // https://laravel.com/docs/8.x/migrations
        Schema::table('three', function (Blueprint $table) {
            $table->renameColumn('name', 'name_two');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('three', function (Blueprint $table) {
            $table->renameColumn('name_two', 'name');
        });
    }
}
