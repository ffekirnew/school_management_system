<?php
session_start();

if (isset($_SESSION['t_id'])) {
	header("Location: home/index.php");
} else {
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
					<li><a href="">Teacher</a></li>
					<li><a href="">Student</a></li>
					<li><a href="">Tourist</a></li>
				</ul>
			</article>
		</div>
	</header>
	<main>
		<div class="index-banner">
			<nav><h2>Hello, Teacher!</h2></nav>
			<article>
				<form method="post" action="includes/login.inc.php">
					<input type="text" name="uid" placeholder="User Name"><br>
					<input type="password" name="pwd" placeholder="Password"><br>
					<button type="submit" name="submit">Log In!</button><br>
				</form>
			</article>
			<section>';
		$fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

		if (strpos($fullurl, "login=empty") == true) {
			echo "<p class=\'error\'>You did not fill in all the form.</p>";
		}
		if (strpos($fullurl, "login=invalidusername") == true) {
			echo "<p class=\'error\'>You entered an invalid user name.</p>";
		}
		if (strpos($fullurl, "login=wrongpassword") == true) {
			echo "<p class=\'error\'>You entered a wrong password.</p>";
		}
		if (strpos($fullurl, "login=invalidpass") == true) {
			echo "<p class=\'error\'>You entered a wrong password.</p>";
		}
		if (strpos($fullurl, "login=success") == true) {
			echo "<p class=\'succes\'>You are succesfully Loged In!</p>";
			header("location: home/index.php");
		}
		echo '
	</section>
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