<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCvs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cvs', function(Blueprint $table)
		{
			$table->dropColumn('date_of_birth');
			$table->dropColumn('phone_number');
			$table->dropColumn('mobile_number');
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
