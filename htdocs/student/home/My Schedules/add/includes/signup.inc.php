<?php
session_start();
$student_id = $_SESSION['u_id'];

if (isset($_POST['submit'])) { //to check if the button have been clicked
	include_once 'dbh.inc.php'; //connect with the database

	$name = $_POST['name'];
	$type = $_POST['type'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$date = $_POST['date'];
	$note = $_POST['note']; //decleare and initialize data

	if (empty($name) || empty($type) || empty($date)) { //to check if any have been left empty
		header("location: ../index.php?signup=empty");
	}
	else {
					include_once 'dbh.inc.php';

					$name = mysqli_real_escape_string($conn, $_POST['name']);
					$type = mysqli_real_escape_string($conn, $_POST['type']);
					$start = mysqli_real_escape_string($conn, $_POST['start']);
					$end = mysqli_real_escape_string($conn, $_POST['end']);
					$date = mysqli_real_escape_string($conn, $_POST['date']);
					$note = mysqli_real_escape_string($conn, $_POST['note']);
					$student_id = mysqli_real_escape_string($conn, $_SESSION['u_id']);
					

					$sql = "insert into student_schedules (student_schedule_name, student_schedule_type, student_schedule_start, student_schedule_end, student_schedule_date, student_schedule_note, student_id) value ('$name', '$type', '$start', '$end', '$date', '$note', '$student_id')";  

					mysqli_query($conn, $sql);

					header("location: ../index.php?signup=success");
	}		
}
else {
	header("location: ../index.php?signup=error");
}