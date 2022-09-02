<?php
session_start();

if (isset($_POST['submit'])) { //to check if the button have been clicked
	include_once 'dbh.inc.php'; //connect with the database

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//error handlers
	if (empty($uid) || empty($pwd)) {
		header("Location: ../redirect/administrator/index.php?login=empty");
		exit();
	}
	else {
		$sql = "SELECT * FROM admins WHERE admin_uid='$uid';";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);

		if ($resultcheck < 1) {
			header("Location: ../redirect/administrator/index.php?login=invalidusername");
			exit();
		}
		else {
			if ($row = mysqli_fetch_assoc($result)) {
				$sqlpass = "SELECT * FROM admins WHERE admin_pwd='$pwd';";
				$result = mysqli_query($conn, $sqlpass);
				$resultcheck = mysqli_num_rows($result);
				
				if ($resultcheck < 1) {
					header("Location: ../redirect/administrator/index.php?login=invalidpass");
					exit();
				}
				
				else {
					//log in the user
					$_SESSION['u_id'] = $row['admin_id'];
					$_SESSION['u_first'] = $row['admin_first'];
					$_SESSION['u_last'] = $row['admin_last'];
					$_SESSION['u_uid'] = $row['admin_uid'];
					header("Location: ../redirect/administrator/home/index.php");
				}
			}
		}
	}
}
else {
	header("Location: ../redirect/administrator/index.php?login=error");
}