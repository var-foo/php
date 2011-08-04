<!doctype html>
<html>
<head>
	<title>generator</title>
</head>
<body>
	<?php
		$divs = $_POST ['divs'];
		$paragraphs = $_POST ['paragraphs'];
		
		for($i = 0; $i <= sizeof($divs); $i++){
			echo '<div id="'.($i + 1).'">';
			for($j = 0; $j <= sizeof($paragraphs); $j++){
				echo '<p id="'.($j + 1).'">Text</p>';
			}
			echo "</div>";
		}
	?>
</body>
</html>