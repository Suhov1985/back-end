<?php

$string = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';
echo("<b>Изначальная строка: </b>" . $string . "<br><br>");
function editString($string)
{
	$arr = explode(".", $string);
	$arr = array_reverse($arr);
	return implode(". " , $arr);
}
$newString = editString($string);
echo("<b>Отредактированная строка: </b>" . $newString);