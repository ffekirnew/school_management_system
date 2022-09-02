<?php
session_start();
include_once 'dbh.inc.php';

if (isset($_SESSION['u_id'])) {
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
					<li><a href="redirect/administrator/index.php">Log Out!</a></li>
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
					<th>Age</th>
					<th>Sex</th>
					<th>Subject</th>
					<th>Secondary Subject</th>
					<th>Grade</th>
					<th>Email</th>
					<th>Phone</th>
				</tr>';

				$grade = $_SESSION['u_grade'];
				$sql = "SELECT * FROM teachers where teacher_grade1 = '$grade' || teacher_grade2 = '$grade' || teacher_grade3 = '$grade' || teacher_grade4 = '$grade' || teacher_grade5 = '$grade' ;";
						$result = mysqli_query($conn, $sql);
						$resultcheck = mysqli_num_rows($result);

						if($resultcheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) { 
								echo "<tr><td>".$row['teacher_first']." ";
								echo $row['teacher_last']."</td>";
								echo "<td>".$row['teacher_age']."</td>";
								echo "<td>".$row['teacher_sex']."</td>";
								echo "<td>".$row['teacher_subject1']."</td>";
								echo "<td>".$row['teacher_subject2']."</td>";
								echo "<td>".$grade."</td>";
								echo "<td>".$row['teacher_email']."</td>";
								echo "<td>+251 ".$row['teacher_phone']."</td></tr>";
							}
						}
						echo '</table></article>
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