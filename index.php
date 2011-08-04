	<?php
		// Create an array of page variables because this is faster
		// than multiple variables for page stuff.
		$page = array();
		$page['title'] = 'Hello World';
		
		// include the header
		include('header.php');
	?>
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
		$break = "<br />";
		$dbreak = "<br /><br />";
		// define an array
		$pasta = array('spaghetti', 'penne', 'macaroni'); 
		
		// take an element off the top 
		array_shift($pasta); 
		
		print_r($pasta);
		echo $dbreak;
		//put an item to the front of the array
		array_unshift($pasta, 'spaghetti');
		print_r($pasta);
		echo $dbreak;
		
		//takes a string and turns it into an array:
		$str = 'one|two|three|four|five';
		$numbers = explode('|', $str);
		
		//sorts alphabetically (or numerically)
		sort($numbers);
		print_r($numbers);
		echo $dbreak;
		//sorts reverse alpahnumeric
		rsort($numbers);
		print_r($numbers);
		echo $dbreak;
		
		// set file to read
		$file = 'assets/testing.txt' or die('Could not open file!'); 
		// open file: second argument can be 'r' for read mode,
		//'w' for write mode (overwrites previous contents), 
		//and 'a' for append mode
		$fh = fopen($file, 'r') or die('Could not open file!'); 
		// read file contents of the entire file (could specify number of bytes)
		$data = fread($fh, filesize($file)) or die('Could not read file!'); 
		// close file 
		fclose($fh); 
		// print file contents 
		echo $data;
		echo $dbreak;
		
		$file = 'assets/testing.txt' or die('Could not open file!'); 
		//drop file into an array
		$data = file($file) or die('Could not read file.');
		//print each line of array through a loop
		foreach($data as $line){	
			echo $line.'<br />';
		}
		echo $break;
		
		// set file to read
		$file = 'assets/testing.txt' or die('Could not open file!'); 
		// read file into string 
		$data = file_get_contents($file) or die('Could not read file!'); 
		// print contents 
		echo $data;
		echo $dbreak; 
		
	?>
	<h2>Checking for files And Printing Through Forms:</h2>
	<?php 
		// if form has not yet been submitted 
		// display input box 
		if (!isset($_POST['file'])) { 
	?> 
	
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
    	Enter file path <input type="text" name="file" size="100" /> 
    	<input type="submit" value="Check" />
    </form> 
	
	<?php 
		} 
		// else process form input 
		else { 
		    // check if file exists 
		    // display appropriate message 
		    if (file_exists($_POST['file'])) { 
		        $data = file_get_contents($file) or die('Could not read file!');
				echo $data; 
		        } 
		    else { 
		        echo 'File does not exist!'; 
		    } 
		} 
	?> 
<?php include('footer.php'); ?>
