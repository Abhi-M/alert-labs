<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Alert Labs</title>
    <link rel="stylesheet" href="siimple.css">
    <link href="security.png" rel="icon" type="image/x-icon">
    <style>
    body {
    	width: 100wh;
    	height: 90vh;
    	color: #fff;
    	background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
    	background-size: 400% 400%;
    	-webkit-animation: Gradient 115s ease infinite;
    	-moz-animation: Gradient 115s ease infinite;
    	animation: Gradient 115s ease infinite;
    }

    @-webkit-keyframes Gradient {
    	0% {
    		background-position: 0% 50%
    	}
    	50% {
    		background-position: 100% 50%
    	}
    	100% {
    		background-position: 0% 50%
    	}
    }

    @-moz-keyframes Gradient {
    	0% {
    		background-position: 0% 50%
    	}
    	50% {
    		background-position: 100% 50%
    	}
    	100% {
    		background-position: 0% 50%
    	}
    }

    @keyframes Gradient {
    	0% {
    		background-position: 0% 50%
    	}
    	50% {
    		background-position: 100% 50%
    	}
    	100% {
    		background-position: 0% 50%
    	}
    }

    h1,
    h6 {
    	font-family: 'Open Sans';
    	font-weight: 300;
    	text-align: center;
    	position: absolute;
    	top: 45%;
    	right: 0;
    	left: 0;
    }
    .siimple-card-body{color:white;}
</style>
  </head>
  <body >
    <div class="siimple-grid background">



      <div class="siimple-grid-row">
        <div class="siimple-grid-col siimple-grid-col--12" style="text-align:center;color:white;">
          <div class="siimple-h1" style="color:white;">Alert Labs</div>
            <div class="siimple-h4" style="color:white;">Cross-site scripting labs for web application security enthusiasts</div>
        </div>
          </div>


  <div class="siimple-grid-row">
            <div class="siimple-grid-col siimple-grid-col--2"></div>
        <a href='step-01.php'  target="_blank">
          <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
  <div class="siimple-card-header">
      Alert Lab 1
  </div>
  <div class="siimple-card-body">
      Let's start from URL
  </div>
</div></div>
</a>
        <a href='step-02.php'  target="_blank">
          <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
  <div class="siimple-card-header">
      Alert Lab 2
  </div>
  <div class="siimple-card-body">
      Form
  </div>
</div></div>
</a>
        <a href='step-03.php'  target="_blank">
          <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
  <div class="siimple-card-header">
      Alert Lab 3
  </div>
  <div class="siimple-card-body">
      User agent
  </div>
</div></div>
</a>
        <a href='step-04.php'  target="_blank">
          <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
  <div class="siimple-card-header">
      Alert Lab 4
  </div>
  <div class="siimple-card-body">
      Referrer URL
  </div>
</div></div>
</a>
        <div class="siimple-grid-col siimple-grid-col--2"></div>
    </div>



      <div class="siimple-grid-row">
                <div class="siimple-grid-col siimple-grid-col--2"></div>
            <a href='step-05.php'  target="_blank">
              <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
      <div class="siimple-card-header">
          Alert Lab 5
      </div>
      <div class="siimple-card-body">
          Cookie
      </div>
    </div></div>
    </a>
            <a href='step-06.php'  target="_blank">
              <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
      <div class="siimple-card-header">
          Alert Lab 6
      </div>
      <div class="siimple-card-body">
          Local storage
      </div>
    </div></div>
    </a>
            <a href='step-07.php'  target="_blank">
              <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
      <div class="siimple-card-header">
          Alert Lab 7
      </div>
      <div class="siimple-card-body">
          Login page
      </div>
    </div></div>
    </a>
            <a href='step-08.php'  target="_blank">
              <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
      <div class="siimple-card-header">
          Alert Lab 8
      </div>
      <div class="siimple-card-body">
          Logged in page
      </div>
    </div></div>
    </a>
            <div class="siimple-grid-col siimple-grid-col--2"></div>
        </div>



          <div class="siimple-grid-row">
                    <div class="siimple-grid-col siimple-grid-col--2"></div>
                <a href='step-09.php'  target="_blank">
                  <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
          <div class="siimple-card-header">
              Alert Lab 9
          </div>
          <div class="siimple-card-body">
              Blacklisted: alert()
          </div>
        </div></div>
        </a>
                <a href='step-10.php'  target="_blank">
                  <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
          <div class="siimple-card-header">
              Alert Lab 10
          </div>
          <div class="siimple-card-body">
              Blacklisted: script
          </div>
        </div></div>
        </a>
                <a href='step-11.php'  target="_blank">
                  <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
          <div class="siimple-card-header">
              Alert Lab 11
          </div>
          <div class="siimple-card-body">
              Blacklisted: alert() and script
          </div>
        </div></div>
        </a>
                <a href='step-12.php'  target="_blank">
                  <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
          <div class="siimple-card-header">
              Alert Lab 12
          </div>
          <div class="siimple-card-body">
              Improved blacklist #1
          </div>
        </div></div>
        </a>
                <div class="siimple-grid-col siimple-grid-col--2"></div>
            </div>



              <div class="siimple-grid-row">

                        <div class="siimple-grid-col siimple-grid-col--2"></div>
                        <div class="siimple-grid-col siimple-grid-col--2"></div>
                    <a href='step-13.php'  target="_blank">
                      <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
              <div class="siimple-card-header">
                  Alert Lab 13
              </div>
              <div class="siimple-card-body">
                  Stored XSS
              </div>
            </div></div>
            </a>
                    <a href='step-14.php'  target="_blank">
                      <div class="siimple-grid-col siimple-grid-col--2"><div class="siimple-card" style="max-width:300px">
              <div class="siimple-card-header">
                  Alert Lab 14
              </div>
              <div class="siimple-card-body">
                  Improved blacklist #2
              </div>
            </div></div>
            </a>
                      <div class="siimple-grid-col siimple-grid-col--2"></div>
                        <div class="siimple-grid-col siimple-grid-col--2"></div>
                </div>


      <div class="siimple-grid-row">
        <div class="siimple-grid-col siimple-grid-col--12" style="text-align:center;">
          Built with <a href="http://www.php.net/" target="_blank">PHP</a>, <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">JavaScript</a>, and <a href="https://whatwg.org/" target="_blank">HTML</a>. Developed by <a href="https://www.linkedin.com/in/abhimbalakrishnan" target="_blank">Abhi M Balakrishnan</a>
        </div>
      </div>
    </div>
  </body>
</html>
