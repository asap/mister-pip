<?php
	$radioButton = $_POST['op'];
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
			$ans = sqrt($fNum);
		break;
	}
	
	$_POST['ans'] = (string)$ans;
	"<form action = 'CalculateValues.html' method = 'post'>"
		$_POST['ans'];
	"</form>"
?>