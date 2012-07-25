$(document).ready(function(){
                $("input[name$='op']").click(function(){
                var radio = $(this).val();
                
                if (radio == 'sqrt'){
                    $("#snumber").hide();
                }
                else{
                    $("#snumber").show();
                }                
            });


                $("input[name$='submit']").click(function(){
                if(!$("input[name$='op']:checked").val() && $('input:text').is(":empty"))
                    alert('You must select an operation and fill in text fields.');
                else if(!$("input[name$='op']:checked").val())
                    alert('You must select an operation.');
                else if ($('input:text').is(":empty"))
                    alert('Text field(s) are empty');
            });
    });
        