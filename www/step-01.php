<?php
if(isset($_GET['status'])) {
} else {
header('Location:'.$_SERVER['PHP_SELF'].'?'.'status=good');
die;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>01 - Let's start from URL
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
	echo $status;
}
?>
        </div>
      </div>
    </div>
  </body>
</html>
