<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('establishment_id')->nullable();
            
            $table->string('firstname');
            $table->string('lastname');

            $table->string('address_state')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_street')->nullable();
            $table->string('address_number')->nullable();
            $table->string('address_zip')->nullable();

            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();

            $table->string('image_profile')->nullable();

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
        Schema::drop('customers');
    }
}
