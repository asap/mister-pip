$(document).ready(function(){
    $("input[name$='op']").click(function(){
        var radio = $(this).val();

        if (radio == 'sqrt') 
            $('input#second_number').slideUp();
        else 
            $('input#second_number').slideDown();             
    });

    $('input#calculate').click(function(){
        var $first_number = $('input#first_number');
        var $second_number = $('input#second_number');
        var $operand = $('input[name$="op"]:checked');

        if(!$first_number.val() && !$second_number.val() && !$operand.val()){
            event.preventDefault();
            alert("I don't know what to do. Click something and type stuff.");
        }

        if(!$first_number.val() || !$second_number.val()){
            event.preventDefault();
            alert("I can't calculate if you don't enter anything");
        }

        if(!$operand){
            event.preventDefault();
            alert("I don't know what I should be doing. Select an operand.");
        }
    });

});
        