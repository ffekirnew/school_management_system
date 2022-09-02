<?php
session_start();

if (isset($_POST['submit'])) { //to check if the button have been clicked
	include_once 'dbh.inc.php'; //connect with the database

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//error handlers
	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	}
	else {
		$sql = "SELECT * FROM teachers WHERE teacher_uid='$uid';";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);

		if ($resultcheck < 1) {
			header("Location: ../index.php?login=invalidusername");
			exit();
		}
		else {
			if ($row = mysqli_fetch_assoc($result)) {
				$hashedpwdcheck = password_verify($pwd, $row['teacher_pwd']);
				if ($hashedpwdcheck == false) {
					header("Location: ../index.php?login=wrongpassword");
					exit();
				}
				else if ($hashedpwdcheck == true) {
					//log in the user

					$subject = mysqli_real_escape_string($conn, $_POST['subject']);

					$_SESSION['t_id'] = $row['teacher_id'];
					$_SESSION['t_first'] = $row['teacher_first'];
					$_SESSION['t_last'] = $row['teacher_last'];
					$_SESSION['t_uid'] = $row['teacher_uid'];
					$_SESSION['t_email'] = $row['teacher_email'];
					$_SESSION['t_subject'] = $row['teacher_subject'];
					$_SESSION['t_grade1'] = $row['teacher_grade1'];
					$_SESSION['t_grade2'] = $row['teacher_grade2'];
					$_SESSION['t_grade3'] = $row['teacher_grade3'];
					$_SESSION['t_grade4'] = $row['teacher_grade4'];
					$_SESSION['t_grade5'] = $row['teacher_grade5'];
					header("Location: ../index.php?login=success&subject=$subject");
				}
			}
		}
	}
}
else {
	header("Location: ../index.php?login=error");
}