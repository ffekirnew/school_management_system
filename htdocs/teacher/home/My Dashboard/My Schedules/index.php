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
			<article><h2>School Schedules</h2>
			<table>
				<tr>
					<th>Schedule Name</th>
					<th>Schedule Type</th>
					<th>Schedule Start</th>
					<th>Schedule End</th>
					<th>Schedule Due</th>
				</tr>';

				$id = $_SESSION['t_id'];
				$sql = "SELECT * FROM schedules;";
						$result = mysqli_query($conn, $sql);
						$resultcheck = mysqli_num_rows($result);

						if($resultcheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) { 
								echo "<tr><td>".$row['schedule_name']."</td>";
								echo "<td>".$row['schedule_type']."</td>";
								echo "<td>".$row['schedule_start']."</td>";
								echo "<td>".$row['schedule_end']."</td>";
								echo "<td>".$row['schedule_date']."</td></tr>";
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