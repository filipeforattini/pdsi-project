<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablishmentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('establishments', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('user_id')->nullable();

			$table->string('icon')->nullable();

			$table->string('address_state')->nullable();
			$table->string('address_city')->nullable();
			$table->string('address_street')->nullable();
			$table->string('address_number')->nullable();
			$table->string('address_neighbourhood')->nullable();
			$table->string('address_zip')->nullable();

			$table->string('contact_email')->nullable();
			$table->string('contact_phone')->nullable();

			$table->string('image_cover')->nullable();
			$table->string('image_profile')->nullable();

			$table->float('lat')->nullable();
			$table->float('lng')->nullable();

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
		Schema::drop('establishments');
	}
}
