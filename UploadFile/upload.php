<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="William Salazar"/>
	<meta name="keywords" content="Upload, uploading file, upload file"/>
	<meta name="description" content="This page is supposed to upload a file and have an upload progress bar."/>
	<link rel="stylesheet" href="upload.css"/>	
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
		<div id="container">
				<div id="upload_file">
					<form action="" method="post" enctype="multipart/form-data" id="submitForm" onsubmit="beginUpload();">
						Please upload your file:
						<br>
						<input id="file_upload" type="file" name="file" />
						<input type="hidden" name="UPLOAD_IDENTIFIER" id="progress_key" /><br>
						<input id="uploadBtn" type="submit" name="uploadFile" value="Upload File"/>	
						<div id="uploadprogressbar"></div>
					</form>
				</div>
				<div id="download_file">
					<form action="downloadFile.php" method="post">
						Please choose your download file:<br>
						<select>
							<option>Please choose a file</option>
								<?php								
									include('uploadFile.php');
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
				</div>			
		</div>
	</section>
	<secion>
		<footer>
			<small>&copy; 2012 Will Salazar</small>
		</footer>
	</section>
</body>
</html>