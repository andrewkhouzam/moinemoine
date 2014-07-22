<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEducationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('educations', function(Blueprint $table) {
			$table->increments('id');
			$table->string('institute');
			$table->string('degree');
			$table->string('major');
			$table->string('class');
			$table->string('description');
			$table->string('city');
			$table->string('country');
			$table->integer('gpa');
			$table->string('honors');
			$table->string('scholorship');
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
		Schema::drop('educations');
	}

}
