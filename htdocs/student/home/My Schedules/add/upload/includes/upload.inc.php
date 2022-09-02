<?php 

if (isset($_POST['submit'])) {
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('doc', 'docx', 'pdf');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			$fileNameNew = uniqid('', true).".".$fileActualExt;
			$fileDestination = '../uploads/'.$fileNameNew;

			move_uploaded_file($fileTmpName, $fileDestination);
			header('Location: ../index.php?upload=success');
		} 

		else {
			header('Location: ../index.php?upload=errorfile');
		}
	} 

	else {
		header('Location: ../index.php?upload=errorext');
	}
}

else {
	header("Location: ../index.php?upload=error");
}