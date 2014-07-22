<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_experiences', function(Blueprint $table) {
			$table->increments('id');
			$table->string('company_name');
			$table->integer('job_title');
			$table->date('start_date');
			$table->date('end_date');
			$table->string('city');
			$table->string('country');
			$table->text('description');
						$table->string('cv_id');

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
		Schema::drop('work_experiences');
	}

}
