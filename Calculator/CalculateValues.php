<?php
	$radioButton = $_POST['op'];
	$fnum = $_POST['fnum'];
	$snum = $_POST['snum'];

	if(is_numeric($_POST['fnum']))
		$fNum = (float)$_POST['fnum'];	
	
	if(is_numeric($_POST['snum']))
		$sNum = (float)$_POST['snum'];
	
	switch($radioButton)
	{
		case 'div':
			$ans = $fNum / $sNum; 
		break;
		case 'add':
			$ans = $fNum + $sNum;
		break;
		case 'sub':
			$ans = $fNum - $sNum;
		break;
		case 'mul':
			$ans = $fNum * $sNum;
		break;
		case 'modulo':
			$ans = $fNum % $sNum;
		break;
		case 'power':
			$ans = pow($fNum,$sNum);
		break;
		case 'sqrt':
			if ($fNum < 0)
				$ans = "Error!, not a real number";
			else				
			$ans = sqrt($fNum);
		break;
	}
?>


<!DOCTYPE html>
	<html>
	<head>
		<meta name = "author" content = "William Salazar"/>
		<meta name = "description" content =  "This is a calculator that uses basic operations."/>
		<meta name = "keywords" content = "calculator, simple calculator, calc, simple calc"/>
		<link rel = "stylesheet" href = "style.css"/>
		<script type = "text/javascript" src = "http://code.jquery.com/jquery-1.7.2.js"></script>
		<!--This second script tag can be used if it is preferred to have jQuery as a js file.
		<script type = "text/javascript" src = "/Calculator/jquery-1.7.2.js"></script>
		-->
		<script type = "text/javascript" src = "calculator.js"></script>
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
						<input id="first_number" type = "text" placeholder = "Input Number" name = "fnum" value = "<?php echo $fnum;?>" /><br />
						<input id="second_number" type = "text" placeholder = "Input Number" name = "snum" value = "<?php echo $snum; ?>"/><br />
						<input type = "text" name = "ans" placeholder = "Answer" value = "<?php echo $ans;?>" readonly = "read"/>
						<br /><br /><br />
						<input id="calculate" type = "submit" value = "Calculate" name = "submit" onclick = "validateFields()"/>
						<input type="reset" value="Clear"><br /><br />

						<div id = "operation">							
							<input id="operation_add" type = "radio" name = "op" value = "add" /><label for="operation_add">Add</label><br />
							<input id="operation_multiply" type = "radio" name = "op" value = "mul" /><label for="operation_multiply">Multiply</label><br />
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