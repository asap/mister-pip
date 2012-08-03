<?php
$fileName = $_FILES['file']['name'];
$uploadPath = 'upload/';
$tempName = $_FILES['file']['tmp_name'];
if (!is_writable($uploadPath))
	die('This file can not be used. You do not have sufficient privileges');
else{
	$fileMoved=move_uploaded_file($tempName, $uploadPath.$fileName);
}
?>