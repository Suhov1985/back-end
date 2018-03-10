<?php

function requestPost($key)
{
	if (isset($_POST[$key])) {
		return $_POST[$key];
	}
	return null;
}

$files = [];

function findWord($files, $word)
{
	for($i = 0; $i < count($files); $i++)
	{
		if(!$word){
			$word = " ";
		}
		if(!strstr($files[$i], $word))
		{
			$files[$i] = "";
		}
	}
	return array_filter($files);
}

if ($_POST) {
	$path = requestPost('path'); // strlen
	$word = requestPost('word'); // strlen
	$files = scandir($path);
	$files = findWord($files, $word);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<form method='post'>
	<p>Введите путь к папке</p>
	<input type = "text" name="path">
	<p>Введите слово которое нужно найти</p>
	<input type = "text" name="word">
	<button type='submit'>Go</button>
</form>
<br>
<ul>
	<?php foreach($files as $file): ?>
		<li><?=$file?></li>
	<?php endforeach; ?>
</ul>
</body>
</html>