<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('CvsTableSeeder');
		$this->call('ObjectivesTableSeeder');
		$this->call('EducationsTableSeeder');
		$this->call('Work_experiencesTableSeeder');
		$this->call('SkillsTableSeeder');
		$this->call('ReferencesTableSeeder');
		$this->call('HobbiesTableSeeder');
		$this->call('AwardsTableSeeder');
		$this->call('WorkshopsTableSeeder');
		$this->call('LanguagesTableSeeder');
	}

}
