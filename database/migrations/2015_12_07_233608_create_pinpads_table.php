<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinpadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinpads', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('establishment_id')->nullable();
            $table->string('serial')->nullable();

            $table->float('credit')->default(0);
            $table->float('debit')->default(0);
            $table->float('pass')->default(0);

            $table->float('fee_easymoney')->default(1);

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
        Schema::drop('pinpads');
    }
}
