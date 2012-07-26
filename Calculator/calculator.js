$(document).ready(function(){
    $("input[name$='op']").click(function(){
        var $secondNumber = $('input#secondNumber'); 
        var radio = $(this).val();
        if (radio == 'sqrt') 
            $secondNumber.slideUp();
        else 
            $secondNumber.slideDown();             
    });


    var $submitButton = $('input#submitButton');
    $submitButton.click(function(){
        var $operation = $("input[name$='op']:checked");
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
        else if (!$firstNumber.val() && !$secondNumber.val()){
            event.preventDefault();
            alert('You left both inputs empty.');
        }
        else if (!$firstNumber.val() || !$secondNumber.val()){
            event.preventDefault();
            alert('You left one input empty.');
        }
    });
});
        