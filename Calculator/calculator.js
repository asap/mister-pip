$(document).ready(function(){
    $("input[name$='op']").click(function(){
        var $secondNumber = $('input#secondNumber'); 
        var radio = $(this).val();
        if (radio == 'sqrt'){
            $secondNumber.hide();
        }
        else{
            $secondNumber.show();
        }                
    });
    var $submitButton = $('input#submitButton');
    $submitButton.click(function(){
        var $operation = $("input[name$='op']:checked");
        var $firstNumber = $('input#firstNumber');
        var $secondNumber = $('input#secondNumber');
        
        if (!$operation.val() && !$firstNumber.val())
            alert('You forgot to click on an operation and/or one or more text fields are empty.');
        else if (!$operation.val())
            alert('You forgot to click on an operation');
        else if (!$firstNumber.val() && !$secondNumber.val())
            alert('You left both inputs empty.');
        else if (!$firstNumber.val() || !$secondNumber.val())
            alert('You left one input empty.');
    });
    //var $radioChecked = $("input[name$='op']:checked");
    //    return ($radioChecked.attr("checked") != "undefined" && $radioChecked.attr("checked") == "checked");
});
        