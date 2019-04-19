<?php
if(!isset($_GET['status'])) {
  header('Location: step-21.php?status=good');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>21 - Converts special characters to HTML entities on an HTML input value + capitalizes all characters
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

          $status = htmlspecialchars($status);
          $status = strtoupper($status);

          echo "<input type='text' class='siimple-input' value='".$status."'>";

      }
      ?>





        </div>
        <div style="color:#ecf0f1;">
          We converts special characters to HTML entities on an HTML input value + capitalizes all characters
        </div>
      </div>
    </div>
  </body>
</html>
<!--
/*
https://security.stackexchange.com/questions/145716/xss-bypass-strtoupper-htmlspecialchars
https://pastebin.com/B7C2KRqb
*/
-->
