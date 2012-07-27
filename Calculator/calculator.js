$(document).ready(function(){
    $("input[name$='op']").click(function(){
        var $secondNumber = $('input#secondNumber'); 
        var radio = $(this).val();
        if (radio == 'sqrt' || radio == 'log') 
            $secondNumber.slideUp();
        else 
            $secondNumber.slideDown();             
    });


    var $submitButton = $('input#submitButton');
    $submitButton.click(function(){
        var $operation = $("input[name$='op']:checked");
        //alert($operation.val());
        var $firstNumber = $('input#firstNumber');
        var $secondNumber = $('input#secondNumber');
        
        if (!$operation.val() && !$firstNumber.val() && !$secondNumber.val()){
            event.preventDefault();
            alert('You forgot to click on an operation and/or one or more text fields are empty.');
        }
        else if (!$operation.val()){
            event.preventDefault();
            alert('You forgot to click on an operation');
        }
        else if($operation.val() !== 'sqrt' && $operation.val() !== 'log'){
            if (!$firstNumber.val() && !$secondNumber.val()){
                event.preventDefault();
                alert('You left both inputs empty.');
            }
        }
        else if($operation.val() == 'sqrt' || $operation.val() == 'log'){
            if (!$firstNumber.val()){
                    event.preventDefault();
                    alert('You left one input empty.');
            }
        }        
    });
});