<?php
 $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $ar){
	switch($ar){
		case 1:
			$arr[$ar-1] = '-' . $ar . '-';
			continue;
		case 2:
			$arr[$ar-1] = $ar . '-';
			continue;
		case 3:
			$arr[$ar-1] = $ar . '-';
			continue;
		case 4:
			$arr[$ar-1] = $ar . '-';
			continue;
		case 5:
			$arr[$ar-1] = $ar . '-';
			continue;
		case 6:
			$arr[$ar-1] = $ar . '-';
			continue;
		case 7:
			$arr[$ar-1] = $ar . '-';
			continue;
		case 8:
			$arr[$ar-1] = $ar . '-';
			continue;
		case 9:
			$arr[$ar-1] = $ar . '-';
			continue;

	};
}
foreach ($arr as $ar){
	echo ($ar);
}