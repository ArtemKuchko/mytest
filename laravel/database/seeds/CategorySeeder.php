<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('categories')->insert([
		
			//мужчины 18+:
			
			[
				'id' => '1',
				'name' => 'до 48 кг',
				'min_weight' => '0',
				'max_weight' => '48.1',
				'group_id' => '1'
			],
			
			[
				'id' => '2',
				'name' => 'до 52 кг',
				'min_weight' => '48.1',
				'max_weight' => '52',
				'group_id' => '1'
			],
			
			[
				'id' => '3',
				'name' => 'до 56 кг',
				'min_weight' => '52.1',
				'max_weight' => '56',
				'group_id' => '1'
			],
			
			[
				'id' => '4',
				'name' => 'до 60 кг',
				'min_weight' => '56.1',
				'max_weight' => '60',
				'group_id' => '1'
			
			],
			
			[
			
				'id' => '5',
				'name' => 'до 65 кг',
				'min_weight' => '60.1',
				'max_weight' => '65',
				'group_id' => '1'
			],
			
			[
			
				'id' => '6',
				'name' => 'до 70 кг',
				'min_weight' => '65.1',
				'max_weight' => '70',
				'group_id' => '1'
			
			],
			
			[
			
				'id' => '7',
				'name' => 'до 75 кг',
				'min_weight' => '70.1',
				'max_weight' => '75',
				'group_id' => '1'
			],
			
			[
				
				'id' => '8',
				'name' => 'до 80 кг',
				'min_weight' => '75.1',
				'max_weight' => '80',
				'group_id' => '1'
			
			],
			
			[
				
				'id' => '9',
				'name' => 'до 85 кг',
				'min_weight' => '80.1',
				'max_weight' => '85',
				'group_id' => '1'
			],
			
			[
				
				'id' => '10',
				'name' => 'до 90 кг',
				'min_weight' => '85.1',
				'max_weight' => '90',
				'group_id' => '1'
			
			],
			
			[
				
				'id' => '11',
				'name' => 'свыше 90 кг',
				'min_weight' => '90.1',
				'max_weight' => '0',
				'group_id' => '1'
			
			],
			
			
			//женщины 18+:
			[
				'id' => '12',
				'name' => 'до 48 кг',
				'min_weight' => '48.1',
				'max_weight' => '52',
				'group_id' => '2'
			],
			
			[
				'id' => '13',
				'name' => 'до 52 кг',
				'min_weight' => '48.1',
				'max_weight' => '52',
				'group_id' => '2'
			],
			
			[
				'id' => '14',
				'name' => 'до 56 кг',
				'min_weight' => '52.1',
				'max_weight' => '56',
				'group_id' => '2'
			],
			
			[
				'id' => '15',
				'name' => 'до 60 кг',
				'min_weight' => '56.1',
				'max_weight' => '60',
				'group_id' => '2'
			
			],
			
			[
			
				'id' => '16',
				'name' => 'до 65 кг',
				'min_weight' => '60.1',
				'max_weight' => '65',
				'group_id' => '2'
			],
			
			[
			
				'id' => '17',
				'name' => 'до 70 кг',
				'min_weight' => '65.1',
				'max_weight' => '70',
				'group_id' => '2'
			
			],
			
			[
			
				'id' => '18',
				'name' => 'до 75 кг',
				'min_weight' => '70.1',
				'max_weight' => '75',
				'group_id' => '2'
			]
			
		]);
		
		
    }
}
