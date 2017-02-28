<?php

use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('photos')->insert([
			
			[
				'id' => '1',
				'folder_id' => '1',
				'name' => 'Запорожье',
				'image_path' => '1.jpg'
			],
			
			[
				'id' => '2',
				'folder_id' => '1',
				'name' => 'Судьи',
				'image_path' => '2.jpg'
			],
			
			[
				'id' => '3',
				'folder_id' => '1',
				'name' => 'Бой',
				'image_path' => '3.jpg'
			],
			
			[
				'id' => '4',
				'folder_id' => '1',
				'name' => 'Все судьи',
				'image_path' => '4.jpg'
			],
			
			[
				'id' => '5',
				'folder_id' => '1',
				'name' => 'Тренера',
				'image_path' => '5.jpg'
			],
			
			[
				'id' => '6',
				'folder_id' => '1',
				'name' => 'Награждение',
				'image_path' => '6.jpg'
			],
			
			[
				'id' => '7',
				'folder_id' => '1',
				'name' => 'Нокаут',
				'image_path' => '7.jpg'
			]
		
		]);
		
		
    }
}
