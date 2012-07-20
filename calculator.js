$(document).ready(function(){
    $("input[name$='op']").click(function() {
    	var radio = $(this).val();
    	if (radio == 'sqrt')
    	{
    		$("#snumber").hide();	
    	}
    	else{
    		$("#snumber").show();		
    	}
        //$("input[name$='snum']").hide();
        
    });
});