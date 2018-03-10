<?php

function requestPost($key)
{
	if (isset($_POST[$key])) {
		return $_POST[$key];
	}
	return null;
}

$files = [];

if ($_POST) {
	$path = requestPost('path'); // strlen
	$files = scandir($path);
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
<p>Введите путь к папке</p>
<form method='post'>
	<input type = "text" name="path">
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