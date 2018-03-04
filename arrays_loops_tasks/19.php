<?php
$days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
$today = "Tuesday";
foreach ($days as $day){
	if ($day === $today){
		echo ("<i>" . $day . "</i>" . '<br>');
	}
	else echo $day . '<br>';
}