<?php
	$fileName = $_FILES['file']['name'];
	$uploadPath = 'upload/';
	$tempName = $_FILES['file']['tmp_name'];
	$fileDestination = $uploadPath.$fileName;
	if (!is_writable($uploadPath))
		die('This file can not be used. You do not have sufficient privileges');
	else{
		$fileMoved=move_uploaded_file($tempName, $fileDestination);
	}
	
?>
<!--
<script type="text/javascript" src="jquery-1.7.2.js"></script>
<script>
$(document).ready(function(){
	alert("test");
	alert(uploadPath);
	$.ajax({
	    type: "POST",
	    //dataType: "json",
	    data: uploadPath,
	    url: "upload.php",
	    success: function() {
	    	alert("Success");
	    },
	    error:function(){
	    	alert("Error");
	    }
	});
});
</script>
-->