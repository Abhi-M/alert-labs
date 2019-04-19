<?php
if(!isset($_GET['status'])) {
header('Location: step-11.php?status=good');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>11 - Removes alert
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

          $status = preg_replace('/alert/', '', $status);

          echo $status;
          }
          ?>

        </div>
        <div style="color:#ecf0f1;">
          We remove alert
        </div>
      </div>
    </div>
  </body>
</html>
