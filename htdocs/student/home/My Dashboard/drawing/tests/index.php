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
					<th>Test Name</th>
					<th>Test Type</th>
					<th>Subject</th>
					<th>Test Grade</th>
					<th>Test Grade Two</th>
					<th>Due</th>
					<th>Test Weight</th>
				</tr>';

				$grade = $_SESSION['u_grade'];
				$sql = "SELECT * FROM tests where (test_grade = '$grade' || test_grade2 = '$grade') && (test_subject = 'drawing') ;";
						$result = mysqli_query($conn, $sql);
						$resultcheck = mysqli_num_rows($result);

						if($resultcheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) { 
								echo "<tr><td>".$row['test_name']."</td>";
								echo "<td>".$row['test_type']."</td>";
								echo "<td>".$row['test_subject']."</td>";
								echo "<td>".$row['test_grade']."</td>";
								echo "<td>".$row['test_grade2']."</td>";
								echo "<td>".$row['test_date']."</td>";
								echo "<td>".$row['test_weight']."</td></tr>";
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