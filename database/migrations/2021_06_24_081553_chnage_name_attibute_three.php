<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChnageNameAttibuteThree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // now we are in production or want to keep data in table so we can't refresh migration
        // and we want to change attribute of field, rename or delete field for that we have to 
        // install doctrine/dbal package and then we can change attribute like bellow 
        Schema::table('three', function (Blueprint $table) {
            $table->string('name', 50)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(Blueprint $table)
    {
        $table->string('name')->change();
    }
}
