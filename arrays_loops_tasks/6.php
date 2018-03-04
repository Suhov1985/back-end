<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = [];
$ru = [];
foreach ($arr as $key => $ar){
	$en[] = $key;
	$ru[] = $ar;
}
foreach ($en as $ar){
	echo ('EN - ' . $ar . '<br>');
}
foreach ($ru as $ar){
	echo ('RU - ' . $ar . '<br>');
}