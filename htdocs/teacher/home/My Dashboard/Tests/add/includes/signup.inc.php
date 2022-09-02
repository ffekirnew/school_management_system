<?php

if (isset($_POST['submit'])) { //to check if the button have been clicked
	include_once 'dbh.inc.php'; //connect with the database

	$name = $_POST['name'];
	$type = $_POST['type'];
	$subject = $_POST['subject'];
	$weight = $_POST['weight'];
	$grade1 = $_POST['grade1'];
	$grade2 = $_POST['grade2'];
	$date = $_POST['date']; //decleare and initialize data

	if (empty($name) || empty($type) || empty($weight) || empty($grade1) || empty($grade2) || empty($date)) { //to check if any have been left empty
		header("location: ../index.php?signup=empty");
	}
	else {
					include_once 'dbh.inc.php';

					$name = mysqli_real_escape_string($conn, $_POST['name']);
					$type = mysqli_real_escape_string($conn, $_POST['type']);
					$subject = mysqli_real_escape_string($conn, $_POST['subject']);
					$weight = mysqli_real_escape_string($conn, $_POST['weight']);
					$grade1 = mysqli_real_escape_string($conn, $_POST['grade1']);
					$grade2 = mysqli_real_escape_string($conn, $_POST['grade2']);
					$date = mysqli_real_escape_string($conn, $_POST['date']);

					$sql = "insert into tests (test_name, test_type, test_subject, test_weight, test_grade, test_grade2, test_date) value ('$name', '$type', '$subject', '$weight', '$grade1', '$grade2', '$date')";  

					mysqli_query($conn, $sql);

					header("location: ../created.php?signup=success");
	}		
}
else {
	header("location: ../index.php?signup=error");
}