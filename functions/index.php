<?php
	// Create an array of page variables because this is faster
	// than multiple variables for page stuff.
	$page = array();
	$page['title'] = 'Functions';
	
	// include the header
	include('../simple/header.php');
?>
	<h2>Echo a string (and make it uppercase and lowercase</h2>
	<?php
		// Create a function to echo the argument with an optional flag to
		// uppercase or lowercase the statement.
		function saySomething($something , $flag){
			switch($flag){
				case 'u':
					echo '<span>'.strtoupper($something).'</span><br />';
					break;
				case 'l':
					echo '<span>'.strtolower($something).'</span><br />';
					break;
				default:
					echo '<span>'.$something.'</span><br />';
					break;
			}
				
		}
		// Echo that argument
		saySomething('Hello');
	?>
	<h2>Multiply 10x10</h2>
	
	<?php
		// Create a simple multiplication function
		function getProduct($base , $quotient){
			$product = ($base * $quotient);
			return $product;
		}
		// Print the returned product of the function
		echo '<span>'.getProduct(10 , 10).'</span>';
		
	?>
	
	<h2>Use a form to multiply!</h2>
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
    	Enter the numbers you would like to multiply:
    	<input type="text" name="base" size="10" /> X
    	<input type="text" name="quotient" size="10" /> 
    	<input type="submit" value="Multiply!" />
    </form> 
    
	<?php
		//Set up numbers that are intercepted to be translated into variables
		//and then echo them as the arguments of getProduct() 
		$base = $_POST['base'];
		$quotient = $_POST['quotient'];
		echo '<p>'.getProduct($base , $quotient).'</p>';

	?> 
	
	<h2>Creating/Splitting Arrays</h2>
	<?php
		function getUniqueDomains($list) { 
		    /* iterate over the list, split addresses and add domain part to another array */ 
		    $domains = array(); 
		    foreach ($list as $l) { 
		        $arr = explode("@", $l); 
		        $domains[] = trim($arr[1]); 
		    } 
		    // remove duplicates and return 
		    return array_unique($domains); 
		} 
		
		// read email addresses from a file into an array 
		$fileContents = file("../simple/assets/emails.txt"); 
		
		/* pass the file contents to the function and retrieve the result array */ 
		$returnArray = getUniqueDomains($fileContents); 
		
		// process the return array 
		foreach ($returnArray as $d) { 
		    echo '<p>http://www.'.$d.'</p>';
		} 

		
	?>
	
<?php include('../simple/footer.php'); ?>
