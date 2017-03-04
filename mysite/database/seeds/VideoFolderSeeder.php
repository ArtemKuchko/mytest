<?php

use Illuminate\Database\Seeder;

class VideoFolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//
		DB::table('videofolders')->insert([
		
			[
				'id' => 1,
				'name' => 'Чемпионат Украины',
				'description' => 'Видеоальбом Чемпионата Украины 16-17 февраля 2016',
				'image_path' => '1.jpg'
			],
			
			[
				'id' => 2,
				'name' => 'Кубок Украины',
				'description' => 'Видеоальбом Кубка Украины 19-20 марта 2016',
				'image_path' => '2.jpg'
			],
			
			[
				'id' => 3,
				'name' => 'Чемпионат Европы',
				'description' => 'Видеоальбом Чемпионата Европы 2016',
				'image_path' => '3.jpg'
			],
			
			[
				'id' => 4,
				'name' => 'Wizard Open 2016',
				'description' => 'Видеоальбом Wizard Open 2016',
				'image_path' => '4.jpg'
			],
			
			[
				'id' => 5,
				'name' => 'Новый год',
				'description' => 'Видеоальбом Новый Год',
				'image_path' => '5.jpg'
			],
			
			[
				'id' => 6,
				'name' => '23 февраля',
				'description' => 'Видеоальбом 23 февраля',
				'image_path' => '6.jpg'
			]
		
		
		]);
    }
}
