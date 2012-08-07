$(document).ready(function(){
	var progressBar = 0;
	$('input[type="file"]').click(function(){
		progressBar = 1;
	});

	$("#submitForm").submit(function(){
		$("#upload_progress_bar").show();
		function set(){
			$("#upload_progress_bar").attr('src','uploadFile.php?up_id=<?php echo $up_id; ?>');
		}
		setTimeout(set);
	});
});