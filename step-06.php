
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Alert Labs - Cross-site scripting labs for web application security enthusiasts
    </title>
    <link rel="stylesheet" href="siimple.css">
    <link href="security.png" rel="icon" type="image/x-icon">

<script>
if (localStorage.getItem("bricktown") === null) {
	 localStorage.setItem("bricktown", "bricktown");
}
</script>
  </head>
  <body style="background:#8e44ad;">
    <div class="siimple-grid">
      <div class="siimple-grid-row">
        <div class="siimple-grid-col siimple-grid-col--12" >
          <div id="content" style="text-align:center;font-size:7em;color:white;" >
          </div>


        </div>
      </div>
    </div>

<script>
if (localStorage.getItem("bricktown") !== null) {
		 document.getElementById("content").innerHTML = "<span style=\"font-size:0.4em;\">Current value of <b>bricktown</b> LocalStorage is: </span>" + localStorage.getItem("bricktown") + "";

}

</script>
  </body>
</html>
