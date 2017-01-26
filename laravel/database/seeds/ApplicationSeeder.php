<?php

use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('applications')->insert([
		
			[
				'id' => 1,
				'competition_id' => 1,
				'team_id' => 1
			],
			
			[
				'id' => 2,
				'competition_id' => 1,
				'team_id' => 2
			],
			
			[
				'id' => 3,
				'competition_id' => 1,
				'team_id' => 3
			],
			
			[
				'id' => 4,
				'competition_id' => 1,
				'team_id' => 4
			]
				
		]);
		
    }
}
