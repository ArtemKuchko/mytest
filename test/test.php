<?php

/* 
1.функция сравнения чисел не используя  <> == !=

2. Дан массив In[N], 
вывести массив Out [N], каждый элемент которого равен произведению все чисел In[N] кроме In[i] не используя деление

3. есть 2 массива, в кот. рэндомно заполнены числа от 0 до N-1.
случайным образом в один масси ввставляется число.

найти число за 1 цикл

*/

/*$a=5;
$b=6;


function sravnenie ($a, $b)
{
	$a = strval($a);
	$b = strval($b);
	
	$temp = strcmp($a, $b); 
	echo $temp;
}

sravnenie($a, $b);

*/

$input=array(1,2,3,4);

$out = $input;

//print_r($out);

$temp=1;

for ($i=0; $i<count($input)-1; ++$i)
{
	$temp *= $input[$i];
}

for ($j=0; $j<count($out)-1; $j++)
{
	$out[j] = $temp * (pow($input[j], -1));
	
	/*echo '$j = ' . $j. '<br>';
	echo 'pow($input['.$j.'], -1) = ' . pow($input[j], -1). '<br>';
	echo '$out['.$j.'] = ' . $out[j]. '<br><br>';*/
}

print_r($out);
