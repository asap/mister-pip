<?php
if ($_POST){
	$radioButton = $_POST['op'];
	$firstNum = $_POST['fnum'];
	$secondNum = $_POST['snum'];
	if ($radioButton == 'add') $radioButton = '+';
	else if ($radioButton == 'div') $radioButton = '/';
	else if ($radioButton == 'mul') $radioButton = '*';
	else if ($radioButton == 'sub') $radioButton = '-';
	else if ($radioButton == 'modulo') $radioButton = '%';
	else if ($radioButton == 'power') $radioButton = '^';

	if(is_numeric($firstNum))
		$firstNumber = (float)$firstNum;
	
	if(is_numeric($secondNum))
		$secondNumber = (float)$secondNum;
	
	switch($radioButton)
	{
		case '/':
			if ($secondNumber == 0){
				$answer = "Answer is Undefined.";
			}
			else
				$answer = $firstNumber / $secondNumber; 
		break;
		case '+':
			$answer = $firstNumber + $secondNumber;
		break;
		case '-':
			$answer = $firstNumber - $secondNumber;
		break;
		case '*':
			$answer = $firstNumber * $secondNumber;
		break;
		case '%':
			$answer = $firstNumber % $secondNumber;
		break;
		case '^':
			$answer = pow($firstNumber,$secondNumber);
		break;
		case 'sqrt':
			if ($firstNumber < 0)
				$answer = "Error!, not a real number";
			else
			$answer = sqrt($firstNumber);
		break;
	}
}
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta name = "author" content = "William Salazar"/>
		<meta name = "description" content =  "This is a calculator that uses basic operations."/>
		<meta name = "keywords" content = "calculator, simple calculator, calc, simple calc"/>
		<link rel = "stylesheet" href = "/Calculator/style.css"/>
		<script type = "text/javascript" src = "http://code.jquery.com/jquery-1.7.2.js"></script>
		<script type = "text/javascript" src = "/Calculator/calculator.js"></script>
		<title>Simple Calculator</title>
	</head>
	<body>
		<header>
			<h1>Simple Calculator</h1>
			<div id = "logo"></div>
		</header>
		<section>
			<article>
				<fieldset id = "simple-calculator-container">
					<legend>Simple Calculator</legend>
					<form action = "" method = "post">
						<input id = "firstNumber" type = "text" placeholder = "Input Number" name = "fnum" value = "<?php echo $firstNum;?>" /><br />
						<input id = "secondNumber" type = "text" placeholder = "Input Number" name = "snum" value = "<?php echo $secondNum; ?>"/><br />
						<input type = "text" name = "ans" placeholder = "Answer" value = "<?php echo $answer;?>" readonly = "read"/><br>
						<br><br><br>
						<input id = "submitButton" type = "submit" value = "Calculate" name = "submit" />
						<input id = "resetButton" type = "reset" value = "Clear" /><br /><br />

						<div id = "operation">
							<input id="operation_add" type = "radio" name = "op" value = "add" /><label for="operation_add">Add</label><br />
							<input id="operation_mul" type = "radio" name = "op" value = "mul" /><label for="operation_mul">Multiply</label><br />
							<input id="operation_sub" type = "radio" name = "op" value = "sub" /><label for="operation_sub">Subtract</label><br />
							<input id="operation_div" type = "radio" name = "op" value = "div" /><label for="operation_div">Divide</label><br />
							<input id="operation_mod" type = "radio" name = "op" value = "modulo" /><label for="operation_mod">Modulo</label><br />
							<input id="operation_pow" type = "radio" name = "op" value = "power" /><label for="operation_pow">Power</label><br />
							<input id="operation_sqrt" type = "radio" name = "op" value = "sqrt" /><label for="operation_sqrt">Square Root</label><br />
						</div>
					</form>
				</fieldset>
			</article>
		</section>
		<section id = "footer">
			<footer>
				<small>&copy;2012 William Salazar</small>
			</footer>
	</body>
	</html>