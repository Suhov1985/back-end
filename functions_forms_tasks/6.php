<?php

function requestFiles($key)
{
    if (isset($_FILES[$key])) {
        return $_FILES[$key];
    }

    return null;
}

function requestGet($key)
{
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }

    return null;
}

function redirect($to)
{
    header('Location: ' . $to);
    die;
}

define('IMAGE_JPG', 'image/jpeg');
define('IMAGE_PNG', 'image/png');
define('EXT_PNG', '.png');
define('EXT_JPG', '.jpg');

function getFilename(array $file)
{
    $uniqid = uniqid();

    switch ($file['type']) {
        case IMAGE_JPG:
            return $uniqid . EXT_JPG;
        case IMAGE_PNG:
            return $uniqid . EXT_PNG;
        default:
            return false;
    }
}

// todo: сформировать сообщение о том какое именно поле неправильно заплонено

$message = requestGet('message'); // $_GET['message']
$file = requestFiles('image');
$path = "gallery/";
$files = scandir($path);

function checkImg(&$files)
{
	for ($i = 0; $i < count($files); $i++)
	{
		if(strpos($files[$i], '.jpg') !== false || !strpos($files[$i], '.png') !== false)
		{
			$files[$i] = 0;
		}
	}
	return array_filter($files);
}

$files = checkImg($files);

if ($_POST) {

    $filename = getFilename($file);
    $message = 'Saved';
    move_uploaded_file($_FILES['image']['tmp_name'], 'gallery/' . $filename);

    redirect('6.php?message=' . $message); //die

    $message = 'Form invalid';
}

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

<h1>Create new Product</h1>
<h4><?=$message ?></h4>

<form method='post' enctype="multipart/form-data">
	<input type = "hidden" name="name">
	<input type="file" name="image"> <br>

	<button type='submit'>Go</button>
</form>
<br>
<table>
	<tr>
	<?php foreach($files as $file): ?>
		<td><img src = "gallery/<?=$file?>" alt = "Foto"></td>
	<?php endforeach; ?>
	</tr>
</table>

</body>
</html>