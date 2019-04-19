<?php
if(!isset($_GET['status'])) {
  header('Location: step-15.php?status=good');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>15 - RegEx filter #1
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

    $status = preg_replace('/<(?:\w+)\W+?[\w]/', '', $status);

	echo $status;
}
?>
        </div>
        <div style="color:#ecf0f1;">
          We have the following RegEx: /&#x3C;(?:\w+)\W+?[\w]/
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
