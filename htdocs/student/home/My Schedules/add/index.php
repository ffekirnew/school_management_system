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
					<li><a href="">Teacher</a></li>
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
        	<nav><h2>Fill The Informations About The Schedule</h2></nav>
        	<article>
        	<form action="includes/signup.inc.php" method="post">
            	<input type="text" name="name" placeholder="Schedule Name"><br>
            	<input type="text" name="type" placeholder="Schedule Type"><br>
            	<p>From</p><input type="time" name="start">
            	<p>To</p><input type="time" name="end"><br>
            	<p>On Date</p><input type="date" name="date"><br>
            	<textarea name="note" placeholder="Your Notes On The Scedule"></textarea><br>
            	<button type="submit" name="submit">Create!</button>
        	</form>
        <?php
			$fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			if (strpos($fullurl, "signup=empty") == true) {
				echo "<h2>You did not fill in all the form.</h2>";	
			}
			if (strpos($fullurl, "signup=invalidname") == true) {
				echo "<h2>You used invalid characters as a name.</h2>";	
			}
			if (strpos($fullurl, "signup=invalidemail") == true) {
				echo "<h2>You used an invalid email.</h2>";		
			}
			if (strpos($fullurl, "signup=usertaken") == true) {
				echo "<h2>You used a user name which is already taken</h2>";	
			}
			if (strpos($fullurl, "signup=success") == true) {
				echo "<h2>Your Schedule is Created!</h2>";		
			}
		?>
</article>
		</div>
	</main>

	<footer>
		<div>
			
		</div>
	</footer>

</body>
</html>