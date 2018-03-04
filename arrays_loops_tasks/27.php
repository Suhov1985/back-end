<?php
$row = 10;
$cols = 10;
$colors = ['red','yellow','blue','gray','maroon','brown','green'];
echo '<table border="1" cellpadding="5">';
for($i = 0; $i < $cols; $i++){
	echo '<tr>';
	for($y = 0; $y < $row; $y++){
		$color = $colors[rand(0, 6)];
		echo '<td style="background-color:' . $color . '">' . rand(1, 1000) . '</td>';
	}
	echo '</tr>';
}
echo '</table>';