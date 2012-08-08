<?php
	$uid = uniqid();
	$basePath="upload.php";
	$fileName = $_FILES['file']['name'];
	$uploadPath = 'upload/';
	$tempName = $_FILES['file']['tmp_name'];
	$fileDestination = $uploadPath.$fileName;
	if (!is_writable($uploadPath))
		die('This file can not be used. You do not have sufficient privileges');
	else{
		$fileMoved=move_uploaded_file($tempName, $fileDestination);
	}
	header("location: ".$basePath);
?>