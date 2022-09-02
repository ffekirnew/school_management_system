<?php
session_start();
$student_uid = $_SESSION['u_id'];

if (isset($_POST['submit'])) { //to check if the button have been clicked
	include_once 'dbh.inc.php'; //connect with the database

	$uid = $_POST['uid'];
	$message = $_POST['message']; //decleare and initialize data

	if (empty($uid) || empty($message)) { //to check if any have been left empty
		header("location: ../index.php?send=empty");
	}
	else {
					include_once 'dbh.inc.php';

					$uid = mysqli_real_escape_string($conn, $_POST['uid']);
					$message = mysqli_real_escape_string($conn, $_POST['message']);
					$student_uid = $_SESSION['u_uid']; 

					$sql = "INSERT INTO messages(message_from, message_to, message_text, message_date) VALUE ('$student_uid', '$uid', '$message', now())";  

					mysqli_query($conn, $sql);

					header("location: ../index.php?send=success");
	}		
}
else {
	header("location: ../index.php?send=error");
}