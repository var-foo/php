<!doctype html>
<html>
<head>
	<title>doSomething</title>
</head>
<body>
	<?php
	
	$item = $_POST['item'];
	
	switch($item) {
		case 0:
			$message = "Yuk!";
			break;
		case 1:
			$message = "Maybe";
			break;
		case 2:
			$message = "Yes";
			break;
		case 3:
			$message = "No way, man!";
			break;
		case 4:
			$message = "mmm ham";
			break;
		case 5:
			$message = "Heartburn City!";
			break;
	}
	$pizzaToppings = array('onion', 'tomato', 'cheese', 'anchovies', 'ham', 'pepperoni');
	
	?>
	<p><?php
	
	echo "You have chosen $pizzaToppings[$item].<br />";
	echo $message;
	
	?></p>
		
</body>
</html>