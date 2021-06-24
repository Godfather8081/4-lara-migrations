<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeccondTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // we are creating table like this and we want to add other colum in table
        // and we are in production or we want t0 keep data it table so we cant refresh migration
        // so we will create other migration like we created bellow (add_name_two_in_seccond)
        // we add changes in table and migrate 
        Schema::create('seccond', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
        Schema::dropIfExists('seccond');
    }
}
