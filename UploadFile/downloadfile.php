<?php
echo $uploadPath;
//opendir($uploadPath);
$basePath="upload.php";
readfile($fileDestination);
header("location: ".$basePath);
?>