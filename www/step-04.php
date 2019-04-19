
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>04 - Referer
    </title>
    <link rel="stylesheet" href="siimple.css">
    <link href="security.png" rel="icon" type="image/x-icon">
  </head>
  <body>
    <div class="siimple-grid">
      <div class="siimple-grid-row">
        <div class="siimple-grid-col siimple-grid-col--12" style="font-size:3em;">

		<?php
		if (isset($_SERVER['HTTP_REFERER'])){
			echo utf8_decode(urldecode($_SERVER['HTTP_REFERER']));
		}

?>
        </div>
      </div>
    </div>
  </body>
</html>
