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
			<nav><h2>Assignments' Page!</h2></nav>
			<article>
				<a href="add/index.php"><img class="main-images" src="logos/add.jpg" alt="Add A Test"></a>
				<a href="view/index.php"><img class="main-images" src="logos/view.jpg" alt="View Tests"></a>
			</article>
		</div>
	</main>

	<footer>
		<div>
		</div>
	</footer>

</body>
</html>