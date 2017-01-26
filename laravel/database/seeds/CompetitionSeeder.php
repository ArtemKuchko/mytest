<?php

use Illuminate\Database\Seeder;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('competitions')->insert(
		
		[		
			[
				'id' => 1,
				'name' => 'Чемпионат Украины',
				'date_start' => '2016-12-12',
				'date_end' => '2016-12-13',
				'dead_line' => '2016-12-10',
				'level' => '1',
				'place' => 'Бровары',
				'description' => 'В г. Бровары пройдет 10й чемпионат Украины по ушу в разделе саньшоу',
			],
			
			[
				'id' => 2,
				'name' => 'Чемпионат Донецкой области',
				'date_start' => '2017-10-12',
				'date_end' => '2017-10-13',
				'dead_line' => '2017-10-10',
				'level' => '2',
				'place' => 'Мариуполь',
				'description' => 'В г. Мариуполь пройдет 20й чемпионат Донецкой области по ушу в разделе саньшоу',
			]
		]
		);
		
		
    }
}
