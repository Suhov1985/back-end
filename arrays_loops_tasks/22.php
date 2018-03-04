<?php
$x = '';
for($i = 0; $i < 10; $i++){
	if($i % 2 == 0){
		$x = $x . "xx";
		echo $x . '<br>';
	}
}