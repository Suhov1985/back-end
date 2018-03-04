<?php
	$a = 0;
	$b = 0;
	for ($i = 1; $i <= 9; $i++){
		for ($x = 1; $x <= 9; $x++){
			echo ('<span style="display: inline-block; width: 20px; text-align: center;">' . $i * $x . '</span>' );
		}
		echo ('<br>');
	}