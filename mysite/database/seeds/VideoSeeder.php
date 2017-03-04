<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('videos')->insert([
			
			[
				'id' => '1',
				'folder_id' => '1',
				'name' => 'Бой 1',
				'video_path' => '1.mp4'
				
			],
			
			[
				'id' => '2',
				'folder_id' => '1',
				'name' => 'Бой 2',
				'video_path' => '2.mp4'
			],
			
			[
				'id' => '3',
				'folder_id' => '1',
				'name' => 'Бой 3',
				'video_path' => '3.mp4'
			],
			
			[
				'id' => '4',
				'folder_id' => '1',
				'name' => 'Бой 4',
				'video_path' => '4.mp4'
			],
			
			[
				'id' => '5',
				'folder_id' => '1',
				'name' => 'Бой 5',
				'video_path' => '5.mp4'
			]
		
		]);
    }
}
