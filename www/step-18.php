<?php
if(!isset($_GET['status'])) {
  header('Location: step-18.php?status=good');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>18 - Converts all HTML reserved characters to HTML entities + URL decode
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

    $status = htmlentities($status);

    echo urldecode($status);

}
?>
        </div>
      </div>
    </div>
  </body>
</html>
<!--
/*
https://www.cdxy.me/?p=763
https://github.com/nuxsmin/sysPass/blob/master/inc/SP/Html/Html.class.php#L40
%26%23x22%26%23x3e%26%23x3c%26%23x73%26%23x76%26%23x67%26%23x2f%26%23x6f%26%23x6e%26%23x6c%26%23x6f%26%23x61%26%23x64%26%23x3d%26%23x61%26%23x6c%26%23x65%26%23x72%26%23x74%26%23x28%26%23x31%26%23x29%26%23x3e
*/
-->
