<?php
if (!isset($_COOKIE['alert-labs'])) {
	setcookie('alert-labs', 'alert-labs', time() + (86400 * 30), "/",null,null,true);
	header("Refresh:0");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>05 - Cookie
    </title>
    <link rel="stylesheet" href="siimple.css">
    <link href="security.png" rel="icon" type="image/x-icon">
  </head>
  <body>
    <div class="siimple-grid">
      <div class="siimple-grid-row">
        <div class="siimple-grid-col siimple-grid-col--12" style="font-size:4em;">

<?php
if (isset($_COOKIE['alert-labs'])) {


    echo "<span style=\"font-size:0.4em;\">Current value supplied by <b>alert-labs</b> cookie is: </span><br>" . (string)$_COOKIE['alert-labs'] . '';

}

?>
        </div>
      </div>
    </div>
  </body>
</html>
