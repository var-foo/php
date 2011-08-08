	<?php
		// Create an array of page variables because this is faster
		// than multiple variables for page stuff.
		$page = array();
		$page['title'] = 'Hello World';
		$page['description'] = 'This is the main index page.';
		// include the header
		include('simple/header.php');
	?>
	<hgroup>
		<h1>Index</h1>
		<h2>Navigate to different projects from here</h2>
	</hgroup>
	<div>
		<p><a href="simple/index.php">Simple Statements</a></p>
		<p><a href="functions/index.php">Functions</a></p>
		<p><a href="contactList/index.php">Contact List</a></p>
	</div>
	
	<?php
	
	?> 
<?php include('simple/footer.php'); ?>
