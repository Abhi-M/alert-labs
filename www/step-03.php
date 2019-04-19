
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>03 - User agent
    </title>
    <link rel="stylesheet" href="siimple.css">
    <link href="security.png" rel="icon" type="image/x-icon">
  </head>
  <body>
    <div class="siimple-grid">
      <div class="siimple-grid-row">
        <div class="siimple-grid-col siimple-grid-col--12" style="font-size:2em;">

		<?php
echo $_SERVER['HTTP_USER_AGENT']
?>
        </div>
      </div>
    </div>
  </body>
</html>
