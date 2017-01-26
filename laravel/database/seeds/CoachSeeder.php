<?php

use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		
		DB::table('coaches')->insert([
		
			[
				'id' => '1',
				'name' => 'Руслан',
				'surname' => 'Осипов',
				'last_name' => 'Вячеславович',
			],
			
			[
				'id' => '2',
				'name' => 'Игорь',
				'surname' => 'Бэй',
				'last_name' => 'Романович',
			],
			
			[
				'id' => '3',
				'name' => 'Виктор',
				'surname' => 'Чепуров',
				'last_name' => 'Васильевич',
			],
			
			[
				'id' => '4',
				'name' => 'Андрей',
				'surname' => 'Дедушкин',
				'last_name' => 'Васильевич',
			]
					
		]);
    }
}
