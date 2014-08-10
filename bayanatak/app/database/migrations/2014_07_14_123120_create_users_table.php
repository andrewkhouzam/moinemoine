<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			//
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50);
			$table->string('email', 320);
			$table->string('password', 64);
			$table->string('code', 60);
			$table->string('active', 1);
			$table->string('google_id', 320);
			$table->string('linkedin_id', 320);
			$table->string('facebook_id', 320);
			$table->string('remember_token', 100)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
