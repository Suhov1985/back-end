<!doctype html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport"
	      content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv = "X-UA-Compatible" content = "ie=edge">
	<title>Document</title>
</head>
<body>
	<form action="" method="get">
		<label for = "number1">Number1<input type = "text" id="number1" name="number1" value="0"></label><br>
		<label for = "operator">Operator
			<select name = "operator" id = "operator">
				<option value = "+">+</option>
				<option value = "-">-</option>
				<option value = "*">*</option>
				<option value = "/">/</option>
				<option value = "%">%</option>
			</select>
		</label>
		<br>
		<label for = "number2">Number1<input type = "text" id="number2" name="number2" value="0"></label><br>
		<input type = "submit" value="отправить"><br>
		<span>Результат: </span>
	</form>
</body>
</html>
<?php
	$a = 0;
	$b = 0;
	$operator = 0;
	$res = 0;
	if($_GET){
		$a = $_GET['number1'];
		$b = $_GET['number2'];
		$operator = $_GET['operator'];
		switch ($operator){
			case "+":
			$res = $a + $b;
			echo ($res);
			break;
			case "-":
			$res = $a - $b;
			echo ($res);
			break;
			case "*":
			$res = $a * $b;
			echo ($res);
			break;
			case "/":
			if ($a == 0 || $b == 0){
				echo ("Делить на 0 нельзя");
				break;
			}
			else{
				$res = $a / $b;
				echo ($res);
				break;
			}
			case "%":
			$res = $a % $b;
			echo ($res);
			break;
		}
	}