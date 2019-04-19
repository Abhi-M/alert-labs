
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>06 - Local storage
    </title>
    <link rel="stylesheet" href="siimple.css">
    <link href="security.png" rel="icon" type="image/x-icon">

<script>
if (localStorage.getItem("alert-labs") === null) {
	 localStorage.setItem("alert-labs", "alert-labs");
}
</script>
  </head>
  <body>
    <div class="siimple-grid">
      <div class="siimple-grid-row">
        <div class="siimple-grid-col siimple-grid-col--12" >
          <div id="content" style="font-size:4em;" >
          </div>


        </div>
      </div>
    </div>

<script>
if (localStorage.getItem("alert-labs") !== null) {
		 document.getElementById("content").innerHTML = "<span style=\"font-size:0.4em;\">Current value of <b>alert-labs</b> LocalStorage is: </span><br>" + localStorage.getItem("alert-labs") + "";

}

</script>
  </body>
</html>
