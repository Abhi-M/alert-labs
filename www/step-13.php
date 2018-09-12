<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Alert Labs - Cross-site scripting labs for web application security enthusiasts
    </title>
    <link rel="stylesheet" href="siimple.css">
    <link href="security.png" rel="icon" type="image/x-icon">
  </head>
  <body style="">
    <div class="siimple-grid">
      <div class="siimple-grid-row">
        <div class="siimple-grid-col siimple-grid-col--4" style="">
		<?php

		if (isset($_POST['fname'])) {

			$name =  $_POST['fname'];
      $handle = fopen("step-13-list.csv", "a");
	     $line = array($name);
       fputcsv($handle, $line);
       fclose($handle);

		}
		else{

			echo '<form name="myForm" action="step-13.php" action="index.php" enctype="application/x-www-form-urlencoded" method="post">
			<div class="siimple-form">
			<div class="siimple-form-title">Send a comment</div>
			<div class="siimple-form-detail">Fill the form to contact us.</div>
			<div class="siimple-form-field">
				<div class="siimple-form-field-label">Your name</div>
				<input type="text" class="siimple-input siimple-input--fluid" placeholder="Your name" name="fname">
			</div>
			<div class="siimple-form-field">
				<input class="siimple-btn siimple-btn--blue" type="submit"  value="Send">
			</div>
			</div>
			</form>';

		}

?>

<h2>The names we collected so far</h2>
<?php

$f = fopen("step-13-list.csv", "r");
while (($line = fgetcsv($f)) !== false) {
  foreach ($line as $cell) {
echo $cell . "<br>";
}


}
fclose($f);


?>
        </div>
      </div>
    </div>
  </body>
</html>
