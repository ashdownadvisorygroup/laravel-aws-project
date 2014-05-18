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
		//Disable foreign key checks while seeding:
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');

		
		// Establish the tables to truncate (empty):
		$tables = array(
			'widgets',
		    );

		    foreach ($tables as $table) {
		      DB::table($table)->truncate();
		    }
		
		$this->call('WidgetSeeder');
		
		// Re-enable foreign key checks:
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}