<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCvsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cvs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('first_name');
			$table->string('surname');
			$table->text('date_of_birth');
			$table->string('nationality');
			$table->string('address');
			$table->string('e_mail');
			$table->integer('phone_number');
			$table->integer('mobile_number');
			$table->string('web');
			$table->string('photo');
			$table->string('user_id');

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
		Schema::drop('cvs');
	}

}
