<?php
//$uid = md5(uniqid(mt_rand()));
$fileName = $_FILES['file']['name'];
$uploadPath = 'upload/';
$tempName = $_FILES['file']['tmp_name'];
echo $tempName.'/'.$fileName.'<br>';
echo $uploadPath.'/'.$fileName.'<br>';
if (!is_writable($uploadPath))
	die('This file can not be used. You do not have sufficient privileges');
$fileMoved=move_uploaded_file($tempName, $uploadPath.$fileName);
if ($fileMoved)
	 echo 'Your file upload was successful, view the file <a href="' . $uploadPath . $fileName. '">here</a>';
?>