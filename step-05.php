<?php
if (!isset($_COOKIE['bricktown'])) {
	setcookie('bricktown', 'bricktown', time() + (86400 * 30), "/",null,null,true);
	header("Refresh:0");
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
if (isset($_COOKIE['bricktown'])) {
	

    echo "<span style=\"font-size:0.4em;\">Current value supplied by <b>bricktown</b> cookie is: </span>" . (string)$_COOKIE['bricktown'] . ''; 

}

?>
        </div>
      </div>
    </div>
  </body>
</html>