<?php

if (isset($_POST['submit'])) { //to check if the button have been clicked
	include_once 'dbh.inc.php'; //connect with the database

	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd']; //decleare and initialize data

	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) { //to check if any have been left empty
		header("location: ../index.php?signup=empty");
	}
	else {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("location: ../index.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
		}
		else {
			if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
				header("location: ../index.php?signup=invalidname");
			}
			else {
				$sql = "SELECT * FROM users WHERE user_uid='$uid';";
				$result = mysqli_query($conn, $sql);
				$resultcheck = mysqli_num_rows($result);
				if ($resultcheck > 0) {
					header("Location: ../index.php?signup=usertaken");
				}
				else {
					$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
					include_once 'dbh.inc.php';

					$first = mysqli_real_escape_string($conn, $_POST['first']);
					$last = mysqli_real_escape_string($conn, $_POST['last']);
					$email = mysqli_real_escape_string($conn, $_POST['email']);
					$uid = mysqli_real_escape_string($conn, $_POST['uid']);
					$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

					$sql = "insert into users (user_first, user_last, user_email, user_uid, user_pwd) value ('$first', '$last', '$email', '$uid', '$hashedpwd');";  
					mysqli_query($conn, $sql);

					header("location: ../home.php?signup=success");
				}
			}
		}
	}		
}
else {
	header("location: ../index.php?signup=error");
}