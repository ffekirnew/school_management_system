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
		<div class="index-banner"><section>
			<nav><h2>Messages</h2>
			<table>
				<tr>
					<th>From</th>
					<th>Message</th>
					<th>To</th>
				</tr>';
		
				include_once 'dbh.inc.php';
				$student_uid = $_SESSION['u_uid'];
				$sql = "SELECT * FROM messages where message_from = '$student_uid' || message_to = '$student_uid' ;";
								$result = mysqli_query($conn, $sql);
								$resultcheck = mysqli_num_rows($result);

								if($resultcheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) { 

										$me = '$student_uid';
										echo "<tr><td>@".$row['message_from']."</td>";
										echo "<td>".$row['message_text']."<br><br>On <mark>".$row['message_date']."</mark></td>";
										echo "<td>@".$row['message_to']."</td></tr>";
									}
								}
								echo '</table></nav>
								<article>
									<form action="includes/send.inc.php" method="post">
										<input type="text" name="uid" placeholder="@ Reciever User Name"><br>
										<textarea name="message" placeholder="Message"></textarea><br>
										<button name="submit" type="submit">Send!</button>
									</form>';


			$fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			if (strpos($fullurl, "send=empty") == true) {
				echo "<p class='error'>You did not fill in all the form.</p>";	
			}
			if (strpos($fullurl, "send=success") == true) {
				echo "<p class='succes'>Your Message is sent!</p>";	
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