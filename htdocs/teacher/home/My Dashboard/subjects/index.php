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
					<th>Subject</th>
					<th>Secondary Subject</th>
					<th>Grade</th>
					<th>Secondary Grade</th>
					<th>Tertiary Grade</th>
					<th>Fourth Grade</th>
					<th>Fifth Grade</th>
				</tr>';

				$username = $_SESSION['t_uid'];
				$sql = "SELECT * FROM teachers where teacher_uid = '$username';";
						$result = mysqli_query($conn, $sql);
						$resultcheck = mysqli_num_rows($result);

						if($resultcheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) { 
								echo "<tr><td>".$row['teacher_first']." ";
								echo $row['teacher_last']."</td>";
								echo "<td>".$row['teacher_subject1']."</td>";
								echo "<td>".$row['teacher_subject2']."</td>";
								echo "<td>".$row['teacher_grade1']."</td>";
								echo "<td>".$row['teacher_grade2']."</td>";
								echo "<td>".$row['teacher_grade3']."</td>";
								echo "<td>".$row['teacher_grade4']."</td>";
								echo "<td>".$row['teacher_grade5']."</td></tr>";
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