<html>
<head>
	<title>
		KNow-Me
	</title>
</head>
<body>
	<br>
	<?php 
	if(isset($_GET['view'])){	
	$data=$_GET['view'];
	echo base64_decode($data);
	?>

	<?php
	} else{ ?>
	<h3>KNow-Me : A tool to convert a simple page to a URL and QR code for easy sharing without saving to database</h3>
	<h4>Currently support upto around 2500 characters</h4>
	<form action="geturl.php" method="post">
		<textarea cols="50" rows="10" name="content">Remove this text and type</textarea>
		<input type="submit">
	</form>
	<?php
	}
	?>
</body>
</html>