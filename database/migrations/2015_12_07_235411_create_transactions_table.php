<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('pinpad_id')->nullable();
            $table->integer('card_id')->nullable();
            $table->integer('amount')->nullable();

            $table->integer('fee_easymoney')->default(0);
            $table->integer('fee_aquire')->default(0);

            $table->timestamp('transacted_at')->nullable();
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
        Schema::drop('transactions');
    }
}
