<?php
session_start();
include_once 'dbh.inc.php';

if (isset($_SESSION['t_id'])) {
	echo '<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="viewstyle.css">
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
					<li><a href="">student</a></li>
					<li><a href="">Student</a></li>
					<li><a href="">Tourist</a></li>
				</ul>
			</article>
			<section>
				<ul>
					<li><a href="../../../../../includes/logout.inc.php">Log Out!</a></li>
				</ul>
			</section>
		</div>
	</header>
	<main>
		<div class="index-banner">
			<article>
			<table>
				<tr>
					<th>Name</th>
					<th>Father\'s Name</th>
					<th>Mother\'s Name</th>
					<th>Age</th>
					<th>Sex</th>
					<th>Contact</th>
					<th>Email</th>
					<th>Grade</th>
				</tr>';


						$grade1 = $_SESSION['t_grade1'];
						$grade2 = $_SESSION['t_grade2'];
						$grade3 = $_SESSION['t_grade3'];
						$grade4 = $_SESSION['t_grade4'];
						$grade5 = $_SESSION['t_grade5'];
						$sql = "SELECT * FROM students where student_grade = '$grade1' || student_grade = '$grade2' || student_grade = '$grade3' || student_grade = '$grade4' || student_grade = '$grade5' ;";
						$result = mysqli_query($conn, $sql);
						$resultcheck = mysqli_num_rows($result);

						if($resultcheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) { 
								echo "<tr><td>".$row['student_first']." ";
								echo $row['student_last']."</td>";
								echo "<td>".$row['student_father']."</td>";
								echo "<td>".$row['student_mother']."</td>";
								echo "<td>".$row['student_age']."</td>";
								echo "<td>".$row['student_sex']."</td>";
								echo "<td>".$row['student_contact']."</td>";
								echo "<td>".$row['student_email']."</td>";
								echo "<td>".$row['student_grade']."</td></tr>";
							}
						}
					echo "</table></article>
		</div>
	</main>

	<footer>
		<div>
			
		</div>
	</footer>

</body>
</html>";
				
}
?>