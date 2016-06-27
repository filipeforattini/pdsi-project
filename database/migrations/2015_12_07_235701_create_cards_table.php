<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->nullable();

            $table->string('name')->nullable();
            $table->string('flag')->nullable();
            $table->string('number')->nullable();
            $table->string('expires_at')->nullable();
            $table->string('expires_string')->nullable();
            $table->string('cvv')->nullable();

            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cards');
    }
}
