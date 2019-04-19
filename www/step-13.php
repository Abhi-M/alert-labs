<?php
if(!isset($_GET['status'])) {
header('Location: step-13.php?status=good');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>13 - Removes img, alert, prompt and script
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

    $status = preg_replace('/script/', '', $status);
    $status = preg_replace('/img/', '', $status);
    $status = preg_replace('/alert/', '', $status);
    $status = preg_replace('/prompt/', '', $status);

    echo $status;
    }
?>
        </div>
        <div style="color:#ecf0f1;">
          We remove <b>script</b>, <b>img</b>, <b>alert</b> and <b>prompt</b>
        </div>
      </div>
    </div>
  </body>
</html>
<!--
<svg onload=alert(1)>
-->
