<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('profiles')->insert([
		
		
			//Донецкая область:
			[	
				'id' => 1,
				'name' => 'Артем',
				'surname' => 'Кучко',
				'last_name' => 'Игоревич',
				'birth_date' => '1991-10-02',
				'sport_level' => 'MS',
				'gender' => 'M'
				
			],
			
			[	
				'id' => 2,
				'name' => 'Александр',
				'surname' => 'Мирошниченко',
				'last_name' => 'Романович',
				'birth_date' => '1990-07-01',
				'sport_level' => 'MS',
				'gender' => 'M'
				
			],
			
			[
				'id' => 3,
				'name' => 'Артур',
				'surname' => 'Салахутдинов',
				'last_name' => 'Романович',
				'birth_date' => '1990-09-01',
				'sport_level' => 'MS',
				'gender' => 'M'
			],
			
			[	
				'id' => 4,
				'name' => 'Руслан',
				'surname' => 'Духно',
				'last_name' => 'Петрович',
				'birth_date' => '1987-09-01',
				'sport_level' => 'MS',
				'gender' => 'M'
				
				
			],
			
			[	
				'id' => 5,
				'name' => 'Валерий',
				'surname' => 'Голда',
				'last_name' => 'Артурович',
				'birth_date' => '1985-09-01',
				'sport_level' => 'CMS',
				'gender' => 'M'
				
				
			],
			
			[	
				'id' => 6,
				'name' => 'Антон',
				'surname' => 'Корнеев',
				'last_name' => 'Артурович',
				'birth_date' => '1984-08-01',
				'sport_level' => 'MS',
				'gender' => 'M'
				
				
			],
			
			[	
				'id' => 7,
				'name' => 'Федор',
				'surname' => 'Мустафин',
				'last_name' => 'Валериевич',
				'birth_date' => '1981-08-01',
				'sport_level' => 'MS',
				'gender' => 'M'
				
				
			],
			
			
			[	
				'id' => 8,
				'name' => 'Данил',
				'surname' => 'Осипов',
				'last_name' => 'Русланович',
				'birth_date' => '1997-10-01',
				'sport_level' => 'CMS',
				'gender' => 'M'
								
			],
			
			[	
				'id' => 9,
				'name' => 'Ульяна',
				'surname' => 'Мищенко',
				'last_name' => 'Петровна',
				'birth_date' => '1997-10-01',
				'sport_level' => 'MS',
				'gender' => 'F'
								
			],
			
			[	
				'id' => 10,
				'name' => 'Елена',
				'surname' => 'Калошина',
				'last_name' => 'Васильевна',
				'birth_date' => '1985-10-01',
				'sport_level' => 'MS',
				'gender' => 'F'
								
			],
			
						
			//Винницкая область:
			
			[	
				'id' => 11,
				'name' => 'Андей',
				'surname' => 'Андрущак',
				'last_name' => 'Олегович',
				'birth_date' => '1995-12-01',
				'sport_level' => 'MS',
				'gender' => 'M'				
			],
			
			[	
				'id' => 12,
				'name' => 'Роман',
				'surname' => 'Пневский',
				'last_name' => 'Игоревич',
				'birth_date' => '1994-10-01',
				'sport_level' => 'MS',
				'gender' => 'M'				
			],
			
			[	
				'id' => 13,
				'name' => 'Сергей',
				'surname' => 'Яропуд',
				'last_name' => 'Васильевич',
				'birth_date' => '1994-09-01',
				'sport_level' => 'MS',
				'gender' => 'M'				
			],
			
			[	
				'id' => 14,
				'name' => 'Артур',
				'surname' => 'Приходько',
				'last_name' => 'Васильевич',
				'birth_date' => '1989-09-01',
				'sport_level' => 'MS',
				'gender' => 'M'
								
			],
			
			[				
				'id' => 15,	
				'name' => 'Андрей',
				'surname' => 'Ходацкий',
				'last_name' => 'Артемович',
				'birth_date' => '1987-09-01',
				'sport_level' => 'CMS',
				'gender' => 'M'
								
			],
			
			[	
				'id' => 16,
				'name' => 'Денис',
				'surname' => 'Заведия',
				'last_name' => 'Васильевич',
				'birth_date' => '1996-09-01',
				'sport_level' => 'MS',
				'gender' => 'M'
			],
			
			[	
				'id' => 17,
				'name' => 'Антон',
				'surname' => 'Рудковский',
				'last_name' => 'Игоревич',
				'birth_date' => '1991-09-01',
				'sport_level' => 'MS',
				'gender' => 'M'
			],
			
			[	
				'id' => 18,
				'name' => 'Фарид',
				'surname' => 'Джамалов',
				'last_name' => 'Рубенович',
				'birth_date' => '1997-09-01',
				'sport_level' => '1',
				'gender' => 'M'
			],
			
			[	
				'id' => 19,
				'name' => 'Алена',
				'surname' => 'Осмирко',
				'last_name' => 'Васильевна',
				'birth_date' => '1995-09-01',
				'sport_level' => 'MS',
				'gender' => 'F'
			],
			
			[	
				'id' => 20,
				'name' => 'Ольга',
				'surname' => 'Латыш',
				'last_name' => 'Матреновна',
				'birth_date' => '1991-09-01',
				'sport_level' => '1',
				'gender' => 'F'
			],
			
						
			//Киевская область:
			[	
				'id' => 21,
				'name' => 'Антон',
				'surname' => 'Лацинский',
				'last_name' => 'Петрович',
				'birth_date' => '1992-09-01',
				'sport_level' => 'CMS',
				'gender' => 'M'
			],
			
			[	
				'id' => 22,
				'name' => 'Дмитрий',
				'surname' => 'Баток',
				'last_name' => 'Васильевич',
				'birth_date' => '1991-09-01',
				'sport_level' => 'HMS',
				'gender' => 'M'
			],
			
			[	
				'id' => 23,
				'name' => 'Юрий',
				'surname' => 'Гамалий',
				'last_name' => 'Игоревич',
				'birth_date' => '1988-09-01',
				'sport_level' => 'MS',
				'gender' => 'M'
			],
			
			[	
				'id' => 24,
				'name' => 'Роман',
				'surname' => 'Чубинишвили',
				'last_name' => 'Петрович',
				'birth_date' => '1989-09-01',
				'sport_level' => '1',
				'gender' => 'M'
			],
			
			[	
				'id' => 25,
				'name' => 'Вахтанг',
				'surname' => 'Кикабидзе',
				'last_name' => 'Петрович',
				'birth_date' => '1991-08-01',
				'sport_level' => 'CMS',
				'gender' => 'M'
			],
			
			[	
				'id' => 26,
				'name' => 'Андрей',
				'surname' => 'Коваль',
				'last_name' => 'Петрович',
				'birth_date' => '1985-08-01',
				'sport_level' => 'IMS',
				'gender' => 'M'
			],
			
			[	
				'id' => 27,
				'name' => 'Алексей',
				'surname' => 'Носач',
				'last_name' => 'Русланович',
				'birth_date' => '1984-08-01',
				'sport_level' => 'IMS',
				'gender' => 'M'
			],
			
			[	
				'id' => 28,
				'name' => 'Игорь',
				'surname' => 'Присяжнюк',
				'last_name' => 'Петрович',
				'birth_date' => '1992-05-01',
				'sport_level' => 'MS',
				'gender' => 'M'
			],
			
			[	
				'id' => 29,
				'name' => 'Лилия',
				'surname' => 'Подкопаева',
				'last_name' => 'Игоревна',
				'birth_date' => '1991-07-01',
				'sport_level' => '1',
				'gender' => 'F'
			],
			
			[	
				'id' => 30,
				'name' => 'Людмила',
				'surname' => 'Темная',
				'last_name' => 'Андреевна',
				'birth_date' => '1994-08-01',
				'sport_level' => 'MS',
				'gender' => 'F'
			],
			
			
			//Одесская область:
			
			[	
				'id' => 31,
				'name' => 'Руслан',
				'surname' => 'Мамедов',
				'last_name' => 'Мамедович',
				'birth_date' => '1992-09-01',
				'sport_level' => 'CMS',
				'gender' => 'M'
			],
			
			[	
				'id' => 32,
				'name' => 'Насир',
				'surname' => 'Набирзада',
				'last_name' => 'Мамедович',
				'birth_date' => '1993-09-01',
				'sport_level' => 'CMS',
				'gender' => 'M'
			],
			
			[	
				'id' => 33,
				'name' => 'Александр',
				'surname' => 'Луначевский',
				'last_name' => 'Александрович',
				'birth_date' => '1988-09-01',
				'sport_level' => 'MS',
				'gender' => 'M'
			],
			
			[	
				'id' => 34,
				'name' => 'Кирилл',
				'surname' => 'Коровин',
				'last_name' => 'Александрович',
				'birth_date' => '1985-09-01',
				'sport_level' => 'MS',
				'gender' => 'M'
			],
			
			[	
				'id' => 35,
				'name' => 'Ростислав',
				'surname' => 'Кетун',
				'last_name' => 'Алексеевич',
				'birth_date' => '1983-09-01',
				'sport_level' => 'MS',
				'gender' => 'M'
			],
						
			[
				'id' => 36,
				'name' => 'Леонид',
				'surname' => 'Ушкалов',
				'last_name' => 'Александрович',
				'birth_date' => '1985-09-01',
				'sport_level' => 'MS',
				'gender' => 'M'
			],
			
			[	
				'id' => 37,
				'name' => 'Тарас',
				'surname' => 'Горобец',
				'last_name' => 'Васильевич',
				'birth_date' => '1982-09-01',
				'sport_level' => 'MS',
				'gender' => 'M'
			],
			
			[				
				'id' => 38,	
				'name' => 'Сергей',
				'surname' => 'Высоцкий',
				'last_name' => 'Васильевич',
				'birth_date' => '1987-09-01',
				'sport_level' => 'CMS',
				'gender' => 'M'				
			],
			
			[	
				'id' => 39,
				'name' => 'Татьяна',
				'surname' => 'Дахина',
				'last_name' => 'Васильевна',
				'birth_date' => '1987-09-01',
				'sport_level' => 'MS',
				'gender' => 'F'
			],
			
			[				
				'id' => 40,	
				'name' => 'Анна',
				'surname' => 'Петрунична',
				'last_name' => 'Сергеевна',
				'birth_date' => '1991-07-01',
				'sport_level' => '1',
				'gender' => 'F'				
			],
			
		
		]);
		
		
		
    }
}
