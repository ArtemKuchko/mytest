<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('groups')->insert([
		
			[
				'id' => 1,
				'name' => 'мужчины 18+',
				'gender' => 'M',
				'competition_id' => '1'
				
			],
			
			[
				'id' => 2,
				'name' => 'женщины 18+',
				'gender' => 'F',
				'competition_id' => '1'
				
			]
		
		]);
		
		
		
    }
}
