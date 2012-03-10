<?php

$num1 = 0;
$num2 = 0;
$func = '+';
$answer = 0;

if (isset($_POST['num1'])) {
  $num1 = $_POST['num1'];
}

if (isset($_POST['num2'])) {
  $num2 = $_POST['num2'];
}

if (isset($_POST['func'])) {
  $func = $_POST['func'];
}

switch ($func) {
  case '-':
    $answer = $num1 - $num2;
    break;
  case '*':
    $answer = $num1 * $num2;
    break;
  case '/':
    $answer = $num1 / $num2;
    break;
  case '+':
  default:
    $answer = $num1 + $num2;
    break;
}

$total = $answer * 1.13;

?><!DOCTYPE html>
<html lang="en-ca">
<head>
  <meta charset="utf-8">
  <link href="css/general.css" rel="stylesheet">
  <title>Money Calculator</title>
</head>


<body>
<header><h1>Calculator<h1></header>
	
            <form action="index.php" method="post">
            
            	<div class=" label1">
            		<label for="num1">Number 1</label>
            		<input type="number" id="num1" name="num1">
            	</div>  
            
            	<div class=" label2">
                    <label for="num2">Number 2</label>
                    <input type="number" id="num2" name="num2">
            	</div>

            	<div class="oper">
                    <label for="func">Function</label>
                    <select id="func" name="func">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
           		    </select>
				</div>

				<div class="but">
					<button>Calculate</button>
				</div>
                
				<div class= "res">
  					<strong>$<?php echo number_format($total, 2); ?></strong>
				</div>
			</form>


</body>
</html>
