<?php
	// Create an array of page variables because this is faster
	// than multiple variables for page stuff.
	$page = array();
	$page['title'] = 'Create Account';
	$page['description'] = 'Create you account for the login page here.';
	// include the header
	include('../includes/header.php');
?>
<?php include('userAuth.php'); ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<span>Username:</span>
	<input name="username" type="text" size="20" />
	<span>Password:</span>
	<input name="password" type="password" size="20" />
	<span>Re-enter Password:</span>
	<input name="repass" type="password" size="20" />
	<span>First Name:</span>
	<input name="firstName" type="text" size="20" />
	<span>Last Name:</span>
	<input name="lastName" type="text" size="20" />
	<span>Email:</span>
	<input name="email" type="text" size="50" />
	<input type="submit" value="Add" />
</form>

<?php
	
	function writeFiles(){
		$file = 'password.txt';
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		
		$fh = fopen($file, 'a');
		
		
		fwrite($fh, $username.":".$password.":".$firstName.":".$lastName.":".$email.chr(13).chr(10));	
		
		fclose($fh);
		
	}
	writeFiles();
?>

<?php include('../includes/footer.php'); ?>