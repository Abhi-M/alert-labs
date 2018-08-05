
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Alert Labs - Cross-site scripting labs for web application security enthusiasts
    </title>
    <link rel="stylesheet" href="siimple.css">
    <link href="security.png" rel="icon" type="image/x-icon">
  </head>
  <body style="background:#8e44ad;">
    <div class="siimple-grid">
      <div class="siimple-grid-row">

        <div class="siimple-grid-col siimple-grid-col--12" style="text-align:center;font-size:7em;color:white;">

		<?php
	 if(isset($_GET['status'])) {
    $status =  $_GET['status'];

    $status = preg_replace('/script/', '', $status);
    $status = preg_replace('/alert/', '', $status);

	echo $status;
} else {
    //redirect('step-01.php?status=good'); //redirect is a function
	header('Location: step-11.php?status=good');
}
?>
        </div>
        <div style="color:#ecf0f1;">
          We have blacklisted <b>script</b><br>
          We have blacklisted <b>alert</b>
        </div>
      </div>
    </div>
  </body>
</html>
