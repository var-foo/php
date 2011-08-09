<?php
	// Create an array of page variables because this is faster
	// than multiple variables for page stuff.
	$page = array();
	$page['title'] = 'Login';
	$page['description'] = 'Testing login methods.';
	// include the header
	include('../includes/header.php');
?>
<?php include('userAuth.php'); ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  Username: <input type="text" name="username" size="15" /><br />
  Password: <input type="password" name="password" size="15" /><br />
  <div>
    <p><input type="submit" value="Login" /></p>
  </div>
</form>

<?php
	$un = $_POST['username'];
	$pw = $_POST['password'];
	$ua = new userAuth($un, $pw);
	$ua->setPasswdFile("password.txt");
	$ua->authenticateUser();
	switch ($ua->getResultCode()) { 
	    case -1: 
	        echo "Could not find your user account. <a href=\"createAccount.php\">Create an account</a>"; 
	        break; 
	     
	    case 0: 
	        echo "Your password was incorrect"; 
	        break; 
	     
	    case 1: 
	        echo "Welcome, ".$ua->username; 
	        break; 
	}         
?>
<p>Don't have an account? <a href="createAccount.php">Create one here!</a></p>
<?php include('../includes/footer.php'); ?>