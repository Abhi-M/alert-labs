<?php
if(!isset($_GET['status'])) {
  header('Location: step-12.php?status=good');
}
?>
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

    $status = preg_replace('/<(?:\w+)\W+?[\w]/', '', $status);

	echo $status;
}
?>
        </div>
        <div style="color:#ecf0f1;">
          We have a regex that can filter &lt;script&gt; tags
        </div>
      </div>
    </div>
  </body>
</html>
<!--
/*
<<a|ascript>alert('xss');</script>
*/
-->
