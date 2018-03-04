<?php
	$number = [];

	for($i = 0; $i < 10; $i++){
		$number[] = rand(0, 100);
	}

	$min = $number[0];
	$max = $number[0];

	$minKey = 0;
	$maxKey = 0;

	echo("MASS: ");

	foreach ($number as $n){
		echo $n . ',';
	}

	echo("<br>");

	function foo(&$number, &$min, &$max, &$minKey, &$maxKey){
		for ($i = 0; $i < count($number); $i++){
			if($min > $number[$i]){
				$min = $number[$i];
				$minKey = $i;
			}
		}
		for ($i = 0; $i < count($number); $i++){
			if($max < $number[$i]){
				$max = $number[$i];
				$maxKey = $i;
			}
		}
		$number[$minKey] = $max;
		$number[$maxKey] = $min;
	}
	foo ($number, $min, $max, $minKey, $maxKey);

	echo("<br>MASS-sort: ");

	foreach ($number as $n){
		echo $n . ',';
	}