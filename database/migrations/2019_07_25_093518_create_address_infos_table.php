<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_infos', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('address_list_id')->unsigned();
              $table->foreign('address_list_id')->references('id')->on('address_lists')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->string('MLS')->nullable();
            $table->integer('price')->nullable();
            $table->string('photo')->nullable();
            $table->string('hometype')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('finishedSqFt')->nullable();
            $table->integer('lotSizeSqFt')->nullable();
            $table->string('yearBuilt')->nullable();
            $table->integer('zestimate')->nullable();
            $table->integer('rent_zestimate')->nullable();
            $table->date('last_sold_date')->nullable();
            $table->integer('last_sold_price')->nullable();
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
        Schema::dropIfExists('address_infos');
    }
}
