<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Test</title>
  
  <style type="text/css">
  
	 table {
		 border:1px solid black;
	 }
	 
	 td { 	  
		 width:50px; 
		 height:50px;
	 }
  
  </style>

</head>

<body>

	<?php
	/* 
Создать страничку, на которой будет запуск php функции, которая выведет на экран модернизированную шахматную доску 8х8. 

У функции должно быть 3 входных параметра, количество ячеек по горизонтали, значение ячеек по вертикали и значение цвета
в формате как (#cc0055) так и (rgb(255,255,255))

В итоге должна получиться шахматная доска из 3 цветов. черный белый и третий цвет, сохраняя смещение цветов на одну
ячейку в сторону на каждом из рядов.


	*/

	//ширина - width
	//$w = 8;
	
	$w = $_POST['width'];
	
	//длинна - length
	//$l = 8; 
	$l = $_POST['height'];?>


	<form action="test.php" method="post">
	
		<label>Введите ширину:</label><br>
		<input name="width" placeholder="Ширина" type="number" min="1"> <br><br>

		<label>Введите высоту:</label><br>
		<input name="height" placeholder="Высота" type="number" min="1"> <br><br>

		<label>Введите цвет в формате #cc0055 либо rgb(255,255,255):</label><br>
		<input name="color" placeholder="Цвет"><br><br>

		<button type="submit">Ввести</button>
		
	</form>

	<?php

	if (empty($w) && empty($l)) 
	{
		echo 'Введите данные';
	}
	elseif (empty($w))
	{
		echo 'Введите ширину';
	}
	elseif (empty($l))
	{
		echo 'Введите высоту';
		
	}

	/*elseif (!((preg_match('/^([a-f]|[A-F]|[0-9]){3}(([a-f]|[A-F]|[0-9]){3})?$/i', $_POST['color']))))

	{
		echo 'Введите цвет в формате #cc0055 либо rgb(255,255,255)';
	}*/
	else
	{
	
		?>

		<br>

		<p>Ваша шахматная доска:</p>
		<table>

			<?php

			$te=0;
			for ($j=0; $j < $l; $j++)
			{
				$temp = $w;

				if ($j%2==1)
				{
					$i=0;
				}
				else
				{
					$i=1;
					$temp++;
				}

				?>
			<tr>

				<?php




				if ($te == 0)
				{
					$t=0;
					$te++;
				}
				elseif ($te == 1)
				{
					$t=1;
					$te++;
				}
				else
				{
					$t=2;
					$te = 0;
				}

				for( ; $i < $temp; $i++)
				{

					if ($t == 0)
					{
						$t++;
						?> <td bgcolor="black"></td> <?php
					}
					elseif ($t == 1)
					{
						$t++;
						?> <td bgcolor="white"></td> <?php
					}
					else
					{
						$t = 0;
						?> <td bgcolor="<?php echo $_POST['color']; ?>"></td> <?php
					}

				} ?>

			</tr>

			<?php
			}
		?>
		</table>
	<?php
	}	
	?>




</body>
</html>

