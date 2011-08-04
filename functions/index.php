<?php
	// Create an array of page variables because this is faster
	// than multiple variables for page stuff.
	$page = array();
	$page['title'] = 'Functions';
	
	// include the header
	include('../simple/header.php');
?>
	<?php
		// Create a function to echo the argument with an optional flag to
		// uppercase or lowercase the statement.
		function saySomething($something , $flag){
			switch($flag){
				case 'u':
					echo strtoupper($something).'<br />';
					break;
				case 'l':
					echo strtolower($something).'<br />';
					break;
				default:
					echo $something.'<br />';
					break;
			}
				
		}
		// Echo that argument
		saySomething('Hello');
		
	?>
	
<?php include('../simple/footer.php'); ?>