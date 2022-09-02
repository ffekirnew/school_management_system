<?php
session_start();

if (isset($_SESSION['u_id'])) {
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
			$name = $_SESSION['u_first'];
			echo $name;
			echo '
!</h2></nav>
			<article>
				<a href="My Dashboard/index.php"><img class="main-images" src="logos/dashboard.jpg" alt="Students"></a>
				<a href="My teachers/view.php"><img class="main-images" src="logos/teachers.jpg" alt="Teachers"></a>
				<a href="My schedules/index.php"><img class="main-images" src="logos/schedules.jpg" alt="schedules"></a>
				<a href="messages/index.php"><img class="main-images" src="logos/messages.jpg" alt="Students"></a>
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

else {
	echo "You are not allowed on this page! you bloody hacker!";
}

?>
