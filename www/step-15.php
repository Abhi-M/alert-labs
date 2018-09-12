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

      $name = $_POST['fname'];


			echo "<div style=\"text-align:center;font-size:4em;\">Hello, " . htmlspecialchars($name) . "</div>";

		}
		else{

			echo '<form name="myForm" action="step-15.php" onsubmit="return validateForm()" method="post">
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
        </div>
      </div>
    </div>
  </body>
</html>
