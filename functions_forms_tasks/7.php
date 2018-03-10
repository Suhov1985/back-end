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

function redirect($to)
{
	header('Location: ' . $to);
	die;
}

function isValuesValid($name, $text)
{
	$textFieldsValid = !empty($name) && !empty($text);

	return $textFieldsValid;
}

function createMessage($name, $text)
{
	return [
		'name' => $name,
		'text' => $text,
	];
	// return compact('title', 'price', 'description');
}

function loadMessage()
{
	if (!file_exists('message.txt')) {
		return [];
	}
	$products = file_get_contents('message.txt');

	return unserialize($products);
}

function saveMessage(array $userMessage)
{
	$products = loadMessage();
	$products[] = $userMessage;
	$products = serialize($products);
	file_put_contents('message.txt', $products);
}

$name = requestPost('name');
$text = requestPost('text');
$message = requestGet('message'); // $_GET['message']
if ($_POST) {

	$validation = isValuesValid($name, $text);
	if ($validation) {
		$userMessage = createMessage($name, $text);
		saveMessage($userMessage);
		$message = 'Saved';

		redirect('7.php?message=' . $message); //die
	}
	$message = 'Form invalid';
}
$showMessage = loadMessage();
function showMessages($showMessage)
{
	if($showMessage){
		return $showMessage;
	}
	else{
		return [];
	}
}
$showMessage = showMessages($showMessage);
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
<ul>
	<?php for($i = 0; $i < count($showMessage); $i++): ?>
		<li><?="Name: " . $showMessage[$i]['name'] . "<br>" . "Text:" . $showMessage[$i]['text']?></li>
	<?php endfor; ?>
</ul>

<h1>Create new Message</h1>
<h4><?=$message ?></h4>

<form method='post' enctype="multipart/form-data">
	<label for = "">Name</label>
	<input type = "text" name="name">
	<label for = "">Text</label>
	<textarea name = "text"></textarea>

	<button type='submit'>Go</button>
</form>
<br>

</body>
</html>