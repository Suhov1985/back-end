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

function topWords($string1, $string2){

	$words[] = getWords($string1);
	$words[] = getWords($string2);
	$top1 = "";
	$top2 = "";
	$top3 = "";
	$top = [];
	for ($i = 0; $i < count($words); $i++)
	{
		for ($y = 0; $y < count($words[$i]); $y++)
		{
			if(strlen($top1) < strlen($words[$i][$y]))
			{
				$top1 = $words[$i][$y];
				continue;
			}
		}
	}
	for ($i = 0; $i < count($words); $i++)
	{
		for ($y = 0; $y < count($words[$i]); $y++)
		{
			if(strlen($top2) < strlen($words[$i][$y]) && strlen($top2) < strlen($top1))
			{
				if(strlen($words[$i][$y]) !== strlen($top1))
					$top2 = $words[$i][$y];
				continue;
			}
		}
	}
	for ($i = 0; $i < count($words); $i++)
	{
		for ($y = 0; $y < count($words[$i]); $y++)
		{
			if(strlen($top3) < strlen($words[$i][$y]) && strlen($top3) < strlen($top2))
			{
				if(strlen($words[$i][$y]) !== strlen($top1) && strlen($words[$i][$y]) !== strlen($top2))
					$top3 = $words[$i][$y];
				continue;
			}
		}
	}
	$top[] = $top1;
	$top[] = $top2;
	$top[] = $top3;

	return $top;
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
		$words = topWords($s1, $s2);
		$message = 'Top words: ';
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
	<?php foreach($words as $key => $word): ?>
		<li><?="Место " . ($key + 1) . " " . $word?></li>
	<?php endforeach; ?>
</ul>
</body>
</html>