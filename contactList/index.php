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

<?php
	
	function writeFiles(){
		$file = 'assets/list.txt';
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		
		$fh = fopen($file, 'a');
		
		
		fwrite($fh, $firstName."|".$lastName."|".$email."|".$phone."?".chr(13));	
		
		$info = file_get_contents($file);
		
		fclose($fh);
		
		return $info;
		
	}
	writeFiles();
	function makeTables($list){
		$contacts = array();
		foreach ($list as $l){
			$arr = explode("|", $l);
			$fn[] = trim($arr[0]);
			$ln[] = trim($arr[1]);
			$em[] = trim($arr[2]);
			$ph[] = trim($arr[3]);
		}
		foreach($fn as $f){
			echo $f;
		}
		foreach($ln as $l){
			echo $l;
		}
	}
	$fileCont = file("assets/list.txt");
	
	makeTables($fileCont);
	
?>


<?php include('footer.php'); ?>