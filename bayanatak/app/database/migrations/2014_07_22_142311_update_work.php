<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateWork extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('work_experiences', function(Blueprint $table)
		{
			$table->text('start_date');
			$table->text('end_date');
			$table->string('job_title');
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
