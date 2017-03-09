<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		
		DB::table('news')->insert([
		
			[
				'id' => 1,
				'name' => 'Чемпионат Украины',
				'description' => '27-29 марта в г. Бровары прошел чемпионат Украины по Ушу- саньда. На чемпионате было представлено 14 команд из различных регионов страны.
Несмотря на сложную обстановку, Мариупольские спортсмены приняли участие в составе команды Донецкой области. Под руководством главного тренера Донецкой области, президента Мариупольской федерации Ушу Осипова Руслана Вячеславовича трое наших спортсменов завоевали следующие награды:
Мищенко Ульяна -1 место в в/к 65 кг (16-17 лет),
Осипов Даниил - 2 место в в/к 56 кг (14-15 лет),
Величко Никита - 3 место в в/к 65 кг (14-15 лет).
Ребята показали высокий уровень подготовки и боролись до победного гонга!
Поздравляем спортсменов с достигнутыми результатами, пожелаем им дальнейших побед и свершений как на спортивном, так и на личном поприще',
				
				'image_path' => '1.jpg'

			],
			
			[
				'id' => 2,
				'name' => 'Чемпионат Европы',
				'description' => 'В г. Стара Загора, Болгария, подходит к своему завершению чемпионат Европы по традиционному Ушу. В разделе Цинда в составе команды сборной Украины приняли участие трое мариупольских спортсменов, которые показали следующие результаты:
Мищенко Ульяна – 1 место в в/к 60 кг (17-18 лет)
Осипов Данил – 1 место в в/к 56 кг (15-15 лет)
Осипов Ярослав – 2 место в в/к 65 кг (17-18 лет)
Ребята провели прекрасные бои и показали высокий уровень подготовки. Огромная благодарность тренерскому составу, Осипову Руслану и Осипову Виталию!
Дальнейших побед и успехов!',
				
				'image_path' => '2.png'
			],
			
			[
				'id' => 3,
				'name' => 'Wizar Open 2016',
				'description' => 'В г. Киев прошел международный турнир по кикбоксингу “Wizard open 2016”, в которым приняли участие наши мариупольские спортсмены - Мищенко Ульяна и Приходько Андрей. 
Мищенко Ульяна выступала в разделе К-1 , в весовой категории до 65 кг среди взрослых. Ульяна провела 2 боя, в которых одержала уверенные победы! 
Приходько Андрей выступал в разделе фулл-контакт в в/к 75 кг. Андрей провел 2 боя, завершив их досрочно! 
Поздравляем тренеров, Осипова Руслана и Подмастерчика Ярослава с прекрасным выступлением их подопечных!',
				
				'image_path' => '3.jpg'
			],
			
			[
				'id' => 4,
				'name' => 'Кубок Мира по ушу-саньда 2016',
				'description' => 'Дагестанские ушу-саньдаисты завоевали три медали Кубка мира, проходившего 4-6 ноября в китайском Пекине, сообщил РИА «Дагестан» вице-президент республиканской Федерации ушу-саньда Магомедали Магомедов.
«Российскую команду на этих соревнованиях представляли 4 дагестанских ушу-саньдаиста, троим из которых удалось подняться на пьедестал почета. У нас один чемпион и двое бронзовых призеров», – отметил собеседник.
Золотую медаль турнира сумел взять воспитанник махачкалинского спортивного клуба «Возрождение» Али Магомедов, лидировавший в весовой категории до 60 кг. Третьими призерами соревнований стали представители кизлярского спортклуба имени Ахматова, братья Магомед Абдулхаликов в весе до 65 кг и Али Абдулхаликов в весе до 75 кг.',
				
				'image_path' => '4.jpg'
			],
			
			[
				'id' => 5,
				'name' => 'Финал Кубка Украины по ушу-таолу',
				'description' => 'З 17 по 19 грудня в чудовому місті Львові проходив Кубок України зі спортивного та традиційного ушу. Згадуючи цю важливу подію, хотілося б подякувати Сотрихіній Оксані Станіславівні, Львівську федерацію ушу за бездоганно організовані змагання. Також не можна не відзначити роботу суддів, які з 9 години ранку і до пізнього вечора оцінювали роботу кожного спортсмена протягом усіх 3 днів! Звісно, не можна залишити поза увагою й самих тренерів, їх титанічну працю. Щиро вітаємо володарів кубка, а саме: 3 місце – команда Львівської області, 2 місце- команда міста Запоріжжя. Чемпіонами стала команда Київської області!',				
				'image_path' => '5.jpg'
			]
		
		]);
    }
}
