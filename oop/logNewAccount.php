<?php
	
	function logNewAccount(){
		$file = 'password.txt';
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		if($password === $repass){
			$fh = fopen($file, 'a');
			
			fwrite($fh, $username.":".$password.":".$firstName.":".$lastName.":".$email.chr(13).chr(10));	
			
			fclose($fh);
		} else {
			echo "Your passwords do not match. <a href=\"createAccount.php\">Try again</a>";
		}
	}
	logNewAccount();
?>