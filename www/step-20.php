<?php
if(!isset($_GET['status'])) {
  header('Location: step-20.php?status=good');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>20 - Converts special characters to HTML entities on an HTML input value
    </title>
    <link rel="stylesheet" href="siimple.css">
    <link href="security.png" rel="icon" type="image/x-icon">
  </head>
  <body>
    <div class="siimple-grid">
      <div class="siimple-grid-row">

        <div class="siimple-grid-col siimple-grid-col--12" style="font-size:7em;">

          <button  class="siimple-btn siimple-btn--grey" onclick='alert("<?php echo htmlspecialchars($_GET['status']); ?>")'>
             Read your status
          </button>


        </div>
        <div style="color:#ecf0f1;">
          We converts special characters to HTML entities on an HTML input value
        </div>
      </div>
    </div>
  </body>
</html>
<!--
/*
https://stackoverflow.com/questions/27249888/circumventing-htmlspecialcharsaddslashesinput-for-html-javascript-injection
*/
-->
