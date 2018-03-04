<?php

function requestGet($key)
{
	if (isset($_GET[$key])) {
		return $_GET[$key];
	}

	return null;
}

function requestPost($key)
{
	if (isset($_POST[$key])) {
		return $_POST[$key];
	}

	return null;
}

function isPrime($number)
{
	if (!is_numeric($number)) {
		return false;
	}

	if ($number < 2) {
		return false;
	}

	if ($number <= 3) {
		return true;
	}

	for ($i = 2; $i < $number; $i++) {
		if ($number % $i == 0) {
			return false;
		}
	}

	return true;
}

function isNumberPositive($number)
{
	if (!is_numeric($number)) {
		return false;
	}

	if ($number < 1) {
		return false;
	}

	return true;
}

function redirect($to)
{
	header('Location: ' . $to);
	die;
}


//todo: print message after redirect
$message = null;

if ($_GET) {
	$message = requestGet ('message');
}
if ($_POST) {
	$number = requestPost('number'); // $_POST['number']
	if (isNumberPositive($number)) {
		$message = isPrime($number) ? 'Prime' : 'Not prime';

		redirect('/php-bas-form/form.php?message=' . $message);
	}

	$message = 'Invalid';
}
//print_r($_REQUEST[]);
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

<?=$message ?>

<form method='post'>
	<input type="number" name="number">
	<button type='submit'>Go</button>
</form>


</body>
</html>