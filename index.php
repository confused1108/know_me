<html>
<head>
	<title>
		KNow-Me
	</title>
	<meta charset="utf-8">
	<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
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
		<textarea name="content"></textarea>
		<script>
			CKEDITOR.replace( 'content' );
		</script>
		<input type="submit">
	</form>
	<?php
	}
	?>
		
</body>
</html>