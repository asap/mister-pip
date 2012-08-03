<?php
	if($_GET['id']){
		echo json_encode(uploadprogress_get_info($_GET['id']));
		exit();
	}
?>