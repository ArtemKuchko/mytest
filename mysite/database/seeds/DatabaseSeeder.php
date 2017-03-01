<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		
		
         $this->call(NewsSeeder::class);
		 $this->call(PhotoFolderSeeder::class);
		 $this->call(PhotoSeeder::class);
		 $this->call(VideoFolderSeeder::class);
		 $this->call(VideoSeeder::class);
		 
    }
}
