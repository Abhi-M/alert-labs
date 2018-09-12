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

      $name = preg_replace('/(?:\b(?:(?:type\b\W*?\b(?:text\b\W*?\b
(?:j(?:ava)?|ecma|vb)|application\b\W*?\bx-(?:java|vb))script|c(?:opyparentfolde
r|reatetextrange)|get(?:special|parent)folder|iframe\b.{0,100}?\bsrc)\b|on(?:(?:
mo(?:use(?:o(?:ver|ut)|down|move|up)|ve)|key(?:press|down|up)|c(?:hange|lick)|s(
?:elec|ubmi)t|(?:un)?load|dragdrop|resize|focus|blur)\b\W*?=|abort\b)|(?:l(?:ows
rc\b\W*?\b(?:(?:java|vb)script|shell|http)|ivescript)|(?:href|url)\b\W*?\b(?:(?:
java|vb)script|shell)|background-image|mocha):|s(?:(?:tyle\b\W*=.*\bexpression\b
\W*|ettimeout\b\W*?)\(|rc\b\W*?\b(?:(?:java|vb)script|shell|http):)|a(?:ctivexob
ject\b|lert\b\W*?\(|sfunction:))|<(?:(?:body\b.*?\b(?:backgroun|onloa)d|input\b.
*?\btype\b\W*?\bimage)\b| ?(?:(?:script|meta)\b|iframe)|!\[cdata\[)|(?:\.(?:(?:e
xecscrip|addimpor)t|(?:fromcharcod|cooki)e|innerhtml)|\@import)\b)/', '', $name);

			echo "<div style=\"text-align:center;font-size:7em;\">Hello, " . $name . "</div>";

		}
		else{

			echo '<form name="myForm" action="step-14.php" onsubmit="return validateForm()" method="post">
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
<!--
Thanks to http://www.blackhat.com/presentations/bh-usa-09/VELANAVA/BHUSA09-VelaNava-FavoriteXSS-SLIDES.pdf
<img src="x:alert" onerror="eval(src%2b'(0)')">
and
<img src="x:gif" onerror="eval('al'%2b'lert(0)')">
and
<img src="x:gif" onerror="window['al\u0065rt']
(0)"></img>

-->
