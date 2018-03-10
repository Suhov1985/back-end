<?php
// mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
mb_internal_encoding("UTF-8");
$string = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.';
echo("<b>Изначальная строка: </b>" . $string . "<br><br>");
function editString($string)
{
	$arr = explode(".", $string);
	array_filter($arr);
	for($i = 0; $i < count($arr); $i++)
	{
		$str = explode(" ", trim(($arr[$i])));
		$str[0] = mb_convert_case($str[0], MB_CASE_TITLE, "UTF-8");
		$arr[$i] = implode(" " , $str);
	}
	return implode(". " , $arr);
}
$newString = editString($string);
echo("<b>Отредактированная строка: </b>" . $newString);