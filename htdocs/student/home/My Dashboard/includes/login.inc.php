<?php
session_start();

if (isset($_POST['submit'])) { //to check if the button have been clicked
	include_once 'dbh.inc.php'; //connect with the database

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//error handlers
	if (empty($uid) || empty($pwd)) {
		header("Location: ../login.php?login=empty");
		exit();
	}
	else {
		$sql = "SELECT * FROM users WHERE user_uid='$uid';";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);

		if ($resultcheck < 1) {
			header("Location: ../login.php?login=invalidusername");
			exit();
		}
		else {
			if ($row = mysqli_fetch_assoc($result)) {
				//dehashing the password
				$hashedpwdcheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedpwdcheck == false) {
					header("Location: ../login.php?login=wrongpassword");
				exit();
				}
				else if ($hashedpwdcheck == true) {
					//log in the user
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_uid'] = $row['user_uid'];
					$_SESSION['u_email'] = $row['user_email'];
					header("Location: ../login.php?login=success");
				}
			}
		}
	}
}
else {
	header("Location: ../login.php?login=error");
}