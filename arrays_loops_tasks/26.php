<?php
$number = [];

for($i = 0; $i < 10; $i++){
	$number[] = rand(1, 100);
}

$sum = 0;

echo("MASS: ");

foreach ($number as $n){
	echo $n . ',';
	if($n > 0 && $n % 2 == 0){
		$sum += $n;
	}
}

echo("<br>");

echo("Sum " . $sum);

echo("<br>");

echo("Unpaired ");

foreach ($number as $n){
	if($n > 0 && $n % 2 != 0){
		echo $n . ',';
	}
}