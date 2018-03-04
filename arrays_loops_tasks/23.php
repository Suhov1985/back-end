<?php
	$num = 123;
	$sum = 0;
	if($num <= 0){
		echo ("Введите верное число больше 0");
	}
	else{
		$num = str_split($num);
		foreach ($num as $n){
			$sum += $n;
		}
		echo $sum;
	}