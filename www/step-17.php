<?php
if(!isset($_GET['status'])) {
  header('Location: step-17.php?status=good');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>17 - RegEx filter #3
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

    $status = strip_tags($status);

    // Fix &entity\n;
    $status = str_replace(array('&amp;', '&lt;', '&gt;'), array('&amp;amp;', '&amp;lt;', '&amp;gt;'), $status);
    $status = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $status);
    $status = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $status);
    $status = html_entity_decode($status, ENT_COMPAT, 'UTF-8');

    // Remove any attribute starting with "on" or xmlns
    $status = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $status);

    // Remove javascript: and vbscript: protocols
    $status = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $status);
    $status = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $status);
    $status = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $status);

    // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
    $status = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $status);
    $status = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $status);
    $status = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $status);

    // Remove namespaced elements (we do not need them)
    $status = preg_replace('#</*\w+:\w[^>]*+>#i', '', $status);

    $status = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $status);

	echo $status;
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
