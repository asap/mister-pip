<?php
//$arrayValues = array();
$fileName = $_FILES['file']['name'];
$uploadPath = 'upload/';
$tempName = $_FILES['file']['tmp_name'];
$fileDestination = $uploadPath.$fileName;
//$arrayValues = array_merge($fileDestination);
if (!is_writable($uploadPath))
	die('This file can not be used. You do not have sufficient privileges');
else{
	$fileMoved=move_uploaded_file($tempName, $fileDestination);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="William Salazar"/>
	<meta name="keywords" content="Upload, uploading file, upload file"/>
	<meta name="description" content="This page is supposed to upload a file and have an upload progress bar."/>
	<link rel="stylesheet" href="upload.css"/>
	<script type="text/javascript" src = "http://code.jquery.com/jquery-1.7.2.js"></script>		
	
	<script type="text/javascript" src="jquery.progressbar.min.js"></script>
	
<!--
	<script type="text/javascript" src="jquery-1.3.2.js"></script>

	<script type="text/javascript" src="jquery.js"></script>
-->
<!--	

	<script type="text/javascript">
		var progress_key='<?php $uid; ?>';
		var end = false;

		$(document).ready(function() {

		    $("#upload_progress_bar").progressBar();
		    $("#upload_progress_bar").progressBar({ barImage: 'progressbg_red.gif'} );
		    $("#upload_progress_bar").progressBar({ barImage: 'progressbg_orange.gif', showText: false} );
		    $("#upload_progress_bar").progressBar(65, { showText: false, barImage: 'progressbg_red.gif'});
		    $("#upload_progress_bar").progressBar();
		});

		function showUpload(progress){
			
			$.get("uploadprogess.php?id=" + progress_key, function(data){
				alert(data);
				if(!data){
					end = true;
					return;
				}
				var response;
				eval("response = " + data);
				if(!response)
					return;
				document.getElementById('bytes_u').innerHTML = 'Bytes Uploaded <b>'+response['bytes_uploaded']+'</b> Bits Total <b>'+response['bytes_total']+'</b> <br> Time Remaining <b>'+response['est_sec']+'</b> Sec';
				var perc=Math.floor(100*parseInt(response['bytes_uploaded'])/parseInt(response['bytes_total']));
				$(progress).progressBar(perc);
			});
			setTimeOut("showUpload('"+progress+"')",750);
		}
		function uploadFile(){
			alert("uploadFile Test");
			setTimeOut("showUpload('#upload_progress_bar')",1000);
		}
	</script>
-->    
    <title>Uploading File System</title>
</head>
<body>
	<header>
		<div id="title">
			<h1>Uploading File System</h1>
		</div>
	</header>
	<section>
		<br>
		<p>This application will keep track of what files you have uploaded.</p>
		<p id="container">
			<div id="upload_file">
				<article>
					<form action="#" method="post" enctype="multipart/form-data">
						Please upload your file:
						<input id="file_upload" type="file" name="file" size="35"/>
						<input type="hidden" name="UPLOAD_IDENTIFIER" id="progress_key" /><br>
						<input id="submitButton" type="submit" name="uploadFile" value="Upload File"/>									
						<div id="upload_progress_bar"></div>
						<br>
					</form>
				</article>
			</div>
			<div id="download_file">
				<article>
					<form action="#" method="post">
						Please choose your download file:
						<select>
							<option>Please choose a file</option>
								<?php
									if(is_dir($uploadPath)){
										if($OpenDir = opendir($uploadPath)){
											while(($file = readdir($OpenDir)) !== false)
												echo "<option>$file</option>";
										}
										closedir($OpenDir);
									}
								?>
						</select>
						<br>					
						<input type="submit" name="downloadFile" value="Download File"/>
					</form>
				</article>
			</div>
		</p>
	</section>
	<script type="text/javascript" src="upload.js"></script>
</body>
</html>