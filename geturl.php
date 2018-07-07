<?php
$content=$_POST['content'];
$encode=base64_encode($content);
?>
<br>
<h4>URL:</h4>
<input value="mysite.com?view=<?php echo $encode; ?>" style="width:80%;">
<h4>QR code</h4>
<iframe height="300px" width="300px" src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=mysite.com?view=<?php echo $encode; ?>"></iframe>