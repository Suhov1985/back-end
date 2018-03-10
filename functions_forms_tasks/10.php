<?php

function requestPost($key)
{
	if (isset($_POST[$key])) {
		return $_POST[$key];
	}

	return null;
}

function unique($arg){
	$b = explode(' ', strtolower($arg));
	echo 'Всего слов - ' . count($b);
	$b = array_unique($b);
	echo '; Уникальных слов - ' . count($b);
}

$text = requestPost('text');

if ($_POST)
{
	if ($text) {
		unique($text);
	}
}
//unique($text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Create new Product</title>
</head>
<body>

<h1>Create new Message</h1>
<h4><?=$message ?></h4>

<form method='post'>
	<input type = "text" name="text">
	<button type='submit'>Go</button>
</form>
<br>

</body>
</html>