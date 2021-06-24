<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameTwoInSeccond extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seccond', function (Blueprint $table) {
            //
            $table->string('name_two');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seccond', function (Blueprint $table) {
            //
            $table->dropColumn('name_two');
        });
    }
}
