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
        	<nav><h2>Fill The Informations About The Assignment</h2></nav>
        	<article>
        	<form action="includes/signup.inc.php" method="post">
            	<input type="text" name="name" placeholder="Assignment Name"><br>
            	<input type="text" name="type" placeholder="Assignment Type"><br>
            	<input type="text" name="subject" placeholder="Subject"><br>
            	<input type="text" name="weight" placeholder="Assignment Weight"><br>
            	<input type="text" name="grade1" placeholder="For Grade"><br>
            	<input type="text" name="grade2" placeholder="For Secondary Grade"><br>
            	<input type="date" name="date"><br>
            	<button type="submit" name="submit">Creat!</button>
        	</form></article>
		</div>
	</main>

	<footer>
		<div>
			
		</div>
	</footer>

</body>
</html>