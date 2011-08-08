<?php
	// Create an array of page variables because this is faster
	// than multiple variables for page stuff.
	$page = array();
	$page['title'] = 'Contact List';
	$page['description'] = 'This is a simple php script that captures your name, email, and phone number and adds it to a file, then generates a table from the file.';
	// include the header
	include('../simple/header.php');
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	First Name:
	<input name="firstName" type="text" size="20" />
	<br />
	Last Name:
	<input name="lastName" type="text" size="20" />
	<br />
	Email:
	<input name="email" type="text" size="50" />
	<br />
	Phone:
	<input name="phone" type="text" size="12" />
	<br />
	<input type="submit" value="Add" />
</form>


<?php include('footer.php'); ?>