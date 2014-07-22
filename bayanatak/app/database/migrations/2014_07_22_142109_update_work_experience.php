<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateWorkExperience extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('work_experiences', function(Blueprint $table)
		{
			$table->dropColumn('start_date');
			$table->dropColumn('end_date');
			$table->dropColumn('job_title');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('work_experiences', function(Blueprint $table)
		{
			//
		});
	}

}
