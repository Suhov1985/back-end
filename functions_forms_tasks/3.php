<?php
$file = file_get_contents('./test.txt');
$words = getWords($file);

function removeWords(&$words, $count)
{
	for($i = 0; $i < count($words); $i++)
	{
		if(strlen($words[$i]) > $count)
		{
			$words[$i] = 0;
		}
	}
	return array_filter($words);
}

function requestPost($key)
{
	if (isset($_POST[$key])) {
		return $_POST[$key];
	}
	return null;
}

function redirect($to)
{
	header('Location: ' . $to);
	die;
}

function getWords($string)
{
	$words = explode(' ', $string);

	return array_filter($words);
}

if ($_POST) {
	$col = requestPost('col'); // strlen
	$word = implode(" ", removeWords($words, $col));
//	var_dump($col);
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
<p>
<?="Изначальный текст: " . $file?>
</p>
<br>
<p>Введите максимальное количество символов</p>
<form method='post'>
	<input type = "text" name="col">
	<button type='submit'>Go</button>
</form>
<br>
<?="Фильтрованный текст: " . $word?>
</body>
</html>