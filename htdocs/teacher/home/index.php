<?php
session_start();

if (isset($_SESSION['t_id'])) {
echo '<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="indexstyle.css">
</head>
<body>
	<header>
		<div>
			<nav>
				<h2>SOS HGS JIMMA</h2>
			</nav>
			<article>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Schedules</a></li>
					<li><a href="">Grades</a></li>
				</ul>
			</article>
			<section>
				<ul>
					<li><a href="../../../includes/logout.inc.php">Log Out</a></li>
				</ul>
			</section>
		</div>
	</header>

	<main>
		<div class="index-banner">
			<nav><h2>Hello ';
			$name = $_SESSION['t_first'];
			echo $name;
			echo '!</h2></nav>
			<article>
				<a href="My dashboard/index.php"><img class="main-images" src="logos/dashboard.jpg" alt="Students"></a>
				<a href="My students/index.php"><img class="main-images" src="logos/students.jpg" alt="Teachers"></a>
			</article>
		</div>
	</main>

	<footer>
		<div>
		</div>
	</footer>

</body>
</html>';
}
?>