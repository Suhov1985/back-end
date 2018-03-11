<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
echo("Строка : " . $string . "<br>" . "<br>");
function countWords($string){
	$arr = explode(" ", $string);
	$count = 1;
	$newarr = [];
	for($i = 0; $i < count($arr); $i++)
	{
		$flag = true;
		if(count($newarr) === 0)
		{
			$newarr[0] = [ 'count' => $count, 'name' => $arr[$i]];
			continue;
		}
//		var_dump($newarr);
		for ($y = 0; $y < count($newarr); $y++){
			if($newarr[$y]['name'] == $arr[$i])
			{
				$newarr[$y]['count'] += 1;
				$flag = false;
				break;
			}
		}
		if($flag)
		{
			$newarr[] = ['count' => $count, 'name' => $arr[$i]];
		}
	}
	return $newarr;
}
function showList ($newstring)
{
	for ($i = 0; $i < count($newstring); $i++)
	{
		echo($newstring[$i]['name'] . " - " . $newstring[$i]['count'] . '<br>');
	}
}
$newstring = countWords($string);
rsort($newstring);
showList($newstring);