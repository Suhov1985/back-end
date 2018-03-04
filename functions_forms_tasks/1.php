<?php

define('WORDS_MAX_COUNT', 50);

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

function getCommonWords($string1, $string2)
{
	$words1 = getWords($string1);
	$words2 = getWords($string2);

	return array_unique(array_intersect($words1, $words2));
}

function getWordsCount($string)
{
	$words = getWords($string);

	return count($words);
}

function getWords($string)
{
	$words = explode(' ', $string);

	return array_filter($words);
}

$message = null;
$words = [];

if ($_POST) {
	$s1 = requestPost('string1'); // strlen
	$s2 = requestPost('string2');

	if (
		getWordsCount($s1) < WORDS_MAX_COUNT and
		getWordsCount($s2) < WORDS_MAX_COUNT
	) {
		$words = getCommonWords($s1, $s2);
		$message = 'Common words: ';
	} else {
		$message = 'Invalid';
	}
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
	<textarea name="string1"></textarea>
	<textarea name="string2"></textarea>
	<button type='submit'>Go</button>
</form>

<?=$message ?>
<br>

<ul>
	<?php foreach($words as $word): ?>
		<li><?=$word?></li>
	<?php endforeach; ?>
</ul>
</body>
</html>