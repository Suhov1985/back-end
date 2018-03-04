<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $ar){
	if($ar == 3){
		echo $ar;
		echo ('<br>');
		continue;
	}
	else if($ar == 6){
		echo $ar;
		echo ('<br>');
		continue;
	}
	else if($ar == 9){
		echo $ar;
		echo ('<br>');
		continue;
	}
	else{
		echo $ar . ',';
	}
}