<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//DB::insert('INSERT INTO 'teams' ('name', 'level', '') VALUES (?,?,?) ');
		
		DB::table('teams')->insert([
		
			[
				'id' => 1,
				'name' => 'Донецкая область',
				'level' => '1',
			],
		
			[
				'id' => 2,
				'name' => 'Винницкая область',
				'level' => '1',
			],
		
			[
				'id' => 3,
				'name' => 'Киевская область',
				'level' => '1',
			],
			
			[
				'id' => 4,
				'name' => 'Одесская область',
				'level' => '1',
			],
			
			[
				'id' => 5,
				'name' => 'Херсонская область',
				'level' => '1',
			],
			
			[
				'id' => 6,
				'name' => 'Запорожская область',
				'level' => '1',
			],
			
			[
				'id' => 7,
				'name' => 'Сумская область',
				'level' => '1',
			],
			
			[
				'id' => 8,
				'name' => 'Житомирская область',
				'level' => '1',
			]
		
		]);
				
    }
}
