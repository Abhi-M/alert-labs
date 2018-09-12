<?php
session_start();




$userinfo = array(
                'tom'=>'tom',
                'admin'=>'admin'
                );



if(isset($_POST['username'])) {
  if(isset($userinfo[$_POST['username']])){if($userinfo[$_POST['username']] == $_POST['password']) {
      $_SESSION['username'] = $_POST['username'];
      if(isset($_SESSION['username'])){
          if(!isset($_GET['user'])){
        $url = 'Location: step-08.php?user=' . (string)$_SESSION['username'];
        header($url);

          }
        }
  }

}




}
?><!DOCTYPE html>
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
          if(isset($_GET['message'])) {
           $status =  '<div class="siimple-alert siimple-alert--error">' . $_GET['message'] . '</div>';
       	echo $status;
       }

           ?>
		<?php


    if(isset($_SESSION['username'])){

      echo "You are logged in as " .  $_GET['user'] ;
      echo '<br><br><a class="siimple-btn siimple-btn--blue" href="javascript:delete_cookie(\'PHPSESSID\');" >Logout</a>';
    }
		else{

			echo '<form name="myForm" action="step-08.php"  method="post">
			<div class="siimple-form">
			<div class="siimple-form-title">Login Page</div>
			<div class="siimple-form-detail">Login with username and password</div>
			<div class="siimple-form-field">
				<div class="siimple-form-field-label">Username</div>
				<input type="text" class="siimple-input siimple-input--fluid" placeholder="username" name="username">
			</div>

			<div class="siimple-form-field">
				<div class="siimple-form-field-label">Password</div>
				<input type="password" class="siimple-input siimple-input--fluid" placeholder="password" name="password">
			</div>
			<div class="siimple-form-field">
				<input class="siimple-btn siimple-btn--blue" type="submit"  value="Login">
			</div>
			</div>
			</form>';

		}

?>
        </div>
      </div>
    </div>
    <script>
    function delete_cookie(name) {
  document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
location = window.location.href;
}
</script>
  </body>
</html>
