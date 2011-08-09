<!doctype html>
<html>
<head>
	<?php
		// Create an array of page variables because this is faster
		// than multiple variables for page stuff.
		$page = array();
		$page['title'] = 'Generator';
		$page['description'] = 'This page creates the number of divs and paragraphs specified in the simple index.';
		include('../includes/header.php');
		
	?>
</head>
<body>
	<?php
		$divs = $_POST ['divs'];
		$paragraphs = $_POST ['paragraphs'];
		
		for($i = 0; $i < $divs; $i++){
			echo '<div id="'.($i + 1).'">'."\r\n";
			for($j = 0; $j < $paragraphs; $j++){
				echo "\t".'<p id="'.($j + 1).'">Text</p>'."\r\n";
			}
			echo "</div>\r\n";
		}
	?>
<?php include('../includes/footer.php'); ?>