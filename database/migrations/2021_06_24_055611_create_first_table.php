<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // we are creating simple table un less we are not in production and we don't need data
        // stored in tables we an directly change table stricture and refresh the migration
        // laravle will drop existing table and create it again with changed definition 
        Schema::create('first', function (Blueprint $table) {
            $table->id();
            // first execute this 
            // $table->string('name');
            // then change this and refresh the migration
            $table->string('name', 50);
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
        Schema::dropIfExists('first');
    }
}
