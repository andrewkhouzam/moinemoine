<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAwards extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('awards', function(Blueprint $table)
		{
			// $table->renameColumn('date','temp');
			$table->dropColumn('date');
			// $table->text('date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('awards', function(Blueprint $table)
		{
			//
		});
	}

}
