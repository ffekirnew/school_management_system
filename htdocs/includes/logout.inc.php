<?php
include_once 'dbh.inc.php'; //connect with the database

if (isset($_POST['submit'])) {
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../index.php");
	exit();
}
else {
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../index.php");
}

?>
