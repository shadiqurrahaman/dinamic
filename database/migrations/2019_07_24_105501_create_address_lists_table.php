<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('file_list_id')->unsigned();
            $table->foreign('file_list_id')->references('id')->on('file_lists')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('address');
            $table->string('search_time');
            $table->string('vafourite');
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
        Schema::dropIfExists('address_lists');
    }
}
