<!doctype html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<hgroup>
		<h1>Form Tests:</h1>
		<h2>This is where I will test my forms.</h2>
	</hgroup>
	<div>
		<h2>Food Form (doSomething):</h2>
		<form action="doSomething.php" method="post">
			<select name="item">
	
				<option value="0">Onion</option>
				<option value="1">Tomato</option>
				<option value="2">Cheese</option>
				<option value="3">Anchovies</option>
				<option value="4">Ham</option>
				<option value="5">Pepperoni</option>
			</select>
			<input type="submit" value="Go" />
		</form>
		
		<h2>HTML Creator (generator)</h2>
		<form action="generator.php" method="post">
			Enter the number of divs you would like to create:
			<input name="divs" type="text" size="2" />
			<br />
			Enter the number of paragraphs you would like to have in each div:
			<input name="paragraphs" type="text" size="2" />
			<br />
			<input type="submit" value="Create" />
			
		</form>
	</div>
	<?php 
		// define an array
		$pasta = array('spaghetti', 'penne', 'macaroni'); 
		
		// take an element off the top 
		array_shift($pasta); 
		
		print_r($pasta); 
		//put an item to the front of the array
		array_unshift($pasta, 'spaghetti');
		
		print_r($pasta);
		
		//takes a string and turns it into an array:
		$str = 'one|two|three|four|five';
		$numbers = explode('|', $str);
		
		//sorts alphabetically (or numerically)
		sort($numbers);
		print_r($numbers);
		
		//sorts reverse alpahnumeric
		rsort($numbers);
		print_r($numbers);

	?>
</body>
</html>