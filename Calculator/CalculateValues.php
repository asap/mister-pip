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
	<head}
		<meta name = "author" content = "William Salazar"/>
		<meta name = "description" content =  "This is a calculator that uses basic operations."/>
		<meta name = "keywords" content = "calculator, simple calculator, calc, simple calc"/>
		<link rel = "stylesheet" href = "/Calculator/style.css"/>
		<script type = "text/javascript" src = "http://code.jquery.com/jquery-1.7.2.js"></script>
		<!--This second script tag can be used if it is preferred to have jQuery as a js file.
		<script type = "text/javascript" src = "/Calculator/jquery-1.7.2.js"></script>
		-->
		<script type = "text/javascript" src = "/Calculator/calculator.js"></script>
		<script>

		function validateFields(){
            var elements = document.getElementsByTagName('input');
            for (var i = 0; i < element.length; i++){
                if (element[i].value == "")
                    alert("You have not entered any values.");
            }
		}

		function clearFields(){
			var elements = document.getElementsByTagName('input');
			for (var i = 0; i < elements.length; i++){
				if (elements[i].type == "text"){
					elements[i].value = "";
				}
			}
		}
		</script>
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
						<input type = "text" placeholder = "Input Number" name = "fnum" value = "<?php echo $fnum;?>" /><br />
						<input type = "text" id = "snumber" placeholder = "Input Number" name = "snum" value = "<?php echo $snum; ?>"/><br />
						<input type = "text" name = "ans" placeholder = "Answer" value = "<?php echo $ans;?>" readonly = "read"/>
						<br /><br /><br />
						<input type = "submit" value = "Calculate" name = "submit" onclick = "validateFields()"/>
						<input type = "submit" value = "Clear" onclick = "clearFields()"/><br /><br />

						<div id = "operation">							
							<input type = "radio" name = "op" value = "add" />Add<br />
							<input type = "radio" name = "op" value = "mul" />Multiply<br />
							<input type = "radio" name = "op" value = "sub" />Subtract<br />
							<input type = "radio" name = "op" value = "div" />Divide<br />
							<input type = "radio" name = "op" value = "modulo" />Modulo<br />
							<input type = "radio" name = "op" value = "power" />Power<br />
							<input type = "radio" name = "op" value = "sqrt" />Square Root<br />
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