<?php
$arr = [26, 17, 136, 12, 79, 15];
$result = 0;
foreach ($arr as $ar){
	$result = $result + ($ar * $ar);
}
echo ('Sum: ' . $result);