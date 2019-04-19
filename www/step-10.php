<?php
if(!isset($_GET['status'])) {
  header('Location: step-10.php?status=Z29vZA==');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>10 - Base64
    </title>
    <link rel="stylesheet" href="siimple.css">
    <link href="security.png" rel="icon" type="image/x-icon">
  </head>
  <body>
    <div class="siimple-grid">
      <div class="siimple-grid-row">

        <div class="siimple-grid-col siimple-grid-col--12" style="font-size:7em;">

		<?php
	 if(isset($_GET['status'])) {
    $status =  $_GET['status'];

    $status = base64_decode($status);

	echo $status;
}
?>
        </div>
        <div style="color:#ecf0f1;">
          We have base64 encoded our inputs
        </div>
      </div>
    </div>
  </body>
</html>
<!--
/*
Base64
*/
-->
