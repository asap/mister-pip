$(document).ready(function(){
	alert("test");
	function div(idElement){
		idElement = document.getElementById(idElement);
		return idElement;
	}
	
	div("submitButton").onclick = uploadProcess;

	function uploadProcess(){

		uploadFile("file_upload");
		return false;
	}

	function checkAjaxVersion(){

		var version = false;
		var ieVersion = ["MSXML2.XMLHTTP.6.0","MSXML3.XMLHTTP.3.0","Microsoft.XMLHTTP"];
		for(var i = 0; i < ieVersion.length;i++){
			try{
				version = new ActiveXObject(ieVersion[i]);
				break;
			}
			catch(e){
				continue;
			}
		}
		if(version == false){
			version = new XMLHttpRequest();			
		}			
		else{
			version = verison;
		}
		return version;
	}

	function uploadFile(file){

		var xhr = checkAjaxVersion();
		var form = new FormData();	//Not supported by IE.
		var file = div(file).files[0];

		form.append("fileupload",file);

		xhr.upload.addEventListener("progress",uploadProgress,false);
		xhr.addEventListener("load",uploadResponse,false);
		xhr.open("POST","uploadFile.php");
		xhr.send(form);

		return false;
	}

	function uploadProgress(event){

		var uploadPercent = 0;
		if(event.lengthComputable){
			uploadPercent = Math.round((event.loaded/event.total)*100);
			div("progressBarContainer").style.display = "block";
			div("progressBar").style.width = (uploadPercent*4).toString() + "px";
			div("status").innerHTML = $uploadPercent.toString() + "% uploaded";
		}
		return false;
	}

	function uploadResponse(event){
\
		var response = null;
		alert(event.target.responseText);
		if(event.target.responseText)
		{			
			response = event.target.responseText;


			if(response == 1)
			{				
				div("status").innerHTML = "Upload successful...";
				div("file").value = "";//	Reset the form
				div("progressBarContainer").style.display = "none";
			}
			else
			{
				div("status").innerHTML = response;
			}
		}

		return false;	
	}
});