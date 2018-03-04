<?php
	$n = 1000;
	$num = 0;
	function rec ($n, $num){
		$num += 1;
		$n = $n / 2;
		if ($n <= 50){
			echo $num;
		}
		else{
			return rec($n, $num);
		}
	};
	rec($n, $num);