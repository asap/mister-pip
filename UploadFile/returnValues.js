$(document).ready(function(){
$.ajax({
        url: "upload.php",
        type : "POST",
        data : {
            
        },
        success: function(){
            alert('Success.');
        },
        error : function (){
            alert('Error.');
        }
    });
});