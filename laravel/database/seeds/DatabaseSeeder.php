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
				
         $this->call(CompetitionSeeder::class);
		 
         $this->call(CategorySeeder::class);
		 
         $this->call(ConnectionSeeder::class);
    	
         $this->call(GroupSeeder::class);
    
		 $this->call(ProfileSeeder::class);
		 
		 $this->call(TeamSeeder::class);
		 
		 $this->call(ApplicationSeeder::class);

		 $this->call(ApplineSeeder::class);
		 
		 $this->call(CoachSeeder::class);
        
	}
}
