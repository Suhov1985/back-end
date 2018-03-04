<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$bool = 0;
foreach ($arr as $e){
	if ($e == 2 || $e == 3 || $e == 4){
		$bool = 1;
	}
}
echo $bool ? ("Есть!") : ("Нет!");