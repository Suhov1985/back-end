<?php
$days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
$sun = "Sunday";
$sut = "Saturday";
foreach ($days as $day){
	if ($day === $sun || $day === $sut){
		echo ("<b>" . $day . "</b>" . '<br>');
	}
	else echo $day . '<br>';
}