<?php
	define ("EMPLOYEES_COUNT", 10);

	$employees = [];

	$firstNames = ['Vsya', 'Petya', 'Sasha', 'Andrey', 'Masha'];
	$lastNames = ['Ivanov','Petrov','Sidorov','Orlov','Krasnov'];
	$domains = ['google.com', 'yandes.ru', 'mail.ru'];

	$firstNamesIndex = count($firstNames) - 1;
	$lastNamesIndex = count($lastNames) - 1;
	$domainsIndex = count($domains) - 1;

	for ($i = 0; $i <= EMPLOYEES_COUNT; $i++){
		$firstNameIndex = rand(0 , $firstNamesIndex);
		$lastNameIndex = rand(0 , $lastNamesIndex);
		$domainIndex = rand(0 , $domainsIndex);

		$firstName = $firstNames[$firstNameIndex];
		$lastName = $lastNames[$lastNameIndex];
		$email = $domains[$domainIndex];
		$email = strtolower($firstName . '-' . $lastName)
			. rand(1900, 2000)
			. '@'
			. $email
		;
		$employee = [
			'first-name' => $firstName,
			'last-name' => $lastName,
			'domain' => $email,
		];
		$employees[] = $employee;
	};
	$color = 'ffffff';
	function color(){
		$color1 = rand(0, 255);
		$color2 = rand(0, 255);
		$color3 = rand(0, 255);
		$res = $color1.$color2.$color3;
		$res = dechex($res);
		$res = substr($res, 0, 6);
		if (strlen($res) == 5){
			$res =  '0' . $res;
		}
		elseif (strlen($res) == 4){
			$res =  '00' . $res;
		}
		echo($res);
	};
//	var_dump ($domains);
?>
<!DOCTYPE html>
<html lang = "ru">
<head>
	<meta charset = "utf-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
	<meta name = "viewport" content = "width=device-width, initial-scale=1">

	<title>Employees</title>

	<meta name = "description" content = "Title"/><!-- Description of the page -->
	<meta name = "author" content = "Grebenyuk Viktor"><!-- Author Name -->

	<link rel = "stylesheet" href = "css/bootstrap.min.css"><!-- Bootstrap Style -->
	<link rel = "stylesheet" href = "css/style.css"><!-- Custom Style -->
</head>
<body>
<!--HEADER-->
<header class = "header">
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Home</a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
</header>
<!--HEADER END-->

<!--MAIN BEGIN-->
<main class="main">
	<div class="container">
		<h1>Employees</h1>
		<section class="table-sec">
			<table class="table table-hover">
				<thead>
				<tr>
					<th>Name</th>
					<th>Surname</th>
					<th>Email</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($employees as $key => $employee) : ?>
					<tr style="background: #<?=color(); ?>">
						<td><?=$employee['first-name'] ?></td>
						<td><?=$employee['last-name'] ?></td>
						<td><?=$employee['domain'] ?></td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</div>
</main>
<!--MAIN END-->

<!--FOOTER-->
<footer class="footer">

</footer>
<!--FOOTER END-->
<script src = "js/jquery.min.js"></script><!-- Jquery Library -->
<script src = "js/bootstrap.min.js"></script><!-- Bootstrap Library -->
</body>
</html>
