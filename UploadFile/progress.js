$(document).ready(function(){
	$("BODY").append('<div id="processing_overlay"></div>');
	$("BODY").append(
	         '<div id="processing_container">' +
	              //'<div id="processing_title">This is title</div>' +
		      '<div id="processing_content">' +
		            '<img style="width: 215px; height: 25px;" 
				src="img/googleballs.gif" />' +
			    '<br><br>Please wait' +
		      '</div>' +
	         '</div>');
});