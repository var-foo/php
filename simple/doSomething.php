;<!doctype html>
<html>
<head>
	<?php
		// Create an array of page variables because this is faster
		// than multiple variables for page stuff.
		$page = array();
		$page['title'] = 'Do Something';
		$page['description'] = 'This page simply spits out a sentence based on the food item that was chosen on the simple index page.';
		include('../includes/header.php');
		
	?>
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
		default:
			$message = "Stuff";
			break;
	}
	$pizzaToppings = array('onion', 'tomato', 'cheese', 'anchovies', 'ham', 'pepperoni');
	
	?>
	<p><?php
	
	echo "You have chosen $pizzaToppings[$item].<br />";
	echo $message;
	
	?></p>
		
<?php include('../includes/footer.php'); ?>