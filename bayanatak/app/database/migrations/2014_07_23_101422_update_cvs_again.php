<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCvsAgain extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cvs', function(Blueprint $table)
		{
			$table->text('date_of_birth');
			$table->string('phone_number');
			$table->string('mobile_number');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cvs', function(Blueprint $table)
		{
			//
		});
	}

}
