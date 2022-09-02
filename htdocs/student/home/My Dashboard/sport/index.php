<?php
session_start();

if (isset($_SESSION['u_id'])) {
	echo '<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../indexstyle.css">
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
			<nav><h2>This Subject Is Taught By Sir/Miss ';

			include_once 'dbh.inc.php';
			$grade = $_SESSION['u_grade'];
			$subject = 'sport';
			$sql = "SELECT * FROM teachers where (teacher_grade1 = '$grade' || teacher_grade2 = '$grade' || teacher_grade3 = '$grade' || teacher_grade4 = '$grade' || teacher_grade5 = '$grade') && (teacher_subject1 = '$subject' || teacher_subject2 = '$subject');";
						$result = mysqli_query($conn, $sql);
						$resultcheck = mysqli_num_rows($result);

						if($resultcheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo $row['teacher_first']." ".$row['teacher_last'];
							}
						}


			echo '.</h2></nav>
			<article>
				<a href="tests/index.php"><img class="main-images" src="../logos/tests.jpg" alt="Sign new student"></a>
				<a href="assignments/index.php"><img class="main-images" src="../logos/assignments.jpg" alt="Sign new student"></a>
			</article>
		</div>
	</main>

	<footer>
		<div>
		</div>
	</footer>

</body>
</html>';

?>