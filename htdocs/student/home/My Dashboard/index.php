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
			<nav><h2>Subjects\' Page!</h2></nav>';


			echo '<article>
				<a href="amharic/index.php"><img class="main-images" src="logos/amharic.jpg" alt="Sign new student"></a>
				<a href="english/index.php"><img class="main-images" src="logos/english.jpg" alt="Sign new student"></a>
				<a href="math/index.php"><img class="main-images" src="logos/math.jpg" alt="Sign new student"></a>
				<a href="ict/index.php"><img class="main-images" src="logos/ict.jpg" alt="View Students"></a>
				<a href="civics/index.php"><img class="main-images" src="logos/civics.jpg" alt="Sign new student"></a>
				</article><article>
				<a href="biology/index.php"><img class="main-images" src="logos/biology.jpg" alt="Sign new student"></a>
				<a href="physics/index.php"><img class="main-images" src="logos/physics.jpg" alt="Sign new student"></a>
				<a href="chemistry/index.php"><img class="main-images" src="logos/chemistry.jpg" alt="View Students"></a>
				<a href="sport/index.php"><img class="main-images" src="logos/sport.jpg" alt="View Students"></a>';
			

			$grade = $_SESSION['u_grade'];

			if ($grade == '9A' || $grade == '9B' || $grade == '10A' || $grade == '10B') {
				echo '
					<a href="history/index.php"><img class="main-images" src="logos/history.jpg" alt="View Students"></a>
					<a href="afaan/index.php"><img class="main-images" src="logos/afaan.jpg" alt="View Students"></a>
					<a href="geography/index.php"><img class="main-images" src="logos/geography.jpg" alt="View Students"></a>';
					
			}
			if ($grade == '11A' || $grade == '11B' || $grade == '12A' || $grade == '12B') {
				echo '<a href="drawing/index.php"><img class="main-images" src="logos/drawing.jpg" alt="View Students"></a>';
				
			}

			
		echo '</article></div>
	</main>

	<footer>
		<div>
		</div>
	</footer>

</body>
</html>';
}


?>