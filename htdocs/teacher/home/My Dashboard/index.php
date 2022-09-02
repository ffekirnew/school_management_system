<?php
session_start();
?>

<!DOCTYPE html>
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
			<nav><h2>Students' Page!</h2></nav>
			<article>
				<a href="tests/index.php"><img class="main-images" src="logos/tests.jpg" alt="Tests"></a>
				<a href="my schedules/index.php"><img class="main-images" src="logos/schedules.jpg" alt="Schedules"></a>
				<a href="assignments/index.php"><img class="main-images" src="logos/assignments.jpg" alt="assignments"></a>
				<a href="subjects/index.php"><img class="main-images" src="logos/subjects.jpg" alt="Subjects"></a>
			</article>
		</div>
	</main>

	<footer>
		<div>
		</div>
	</footer>

</body>
</html>