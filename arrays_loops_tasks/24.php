<?php
$num = 442158755745;
$numString = str_split($num);
$count = 0;
foreach ($numString as $n){
	if($n == 5){
		$count++;
	}
}
echo ('Number - ' . $num . '<br>');
echo ('Количество вхождений - ' . $count . '<br>');