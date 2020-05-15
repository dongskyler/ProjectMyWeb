<!-- Config -->
<?php
if ($_SERVER['HTTP_HOST'] === 'localhost') {
  if (strpos(dirname(__FILE__), 'skylerdong.com-gen2')) {
    define('PATH', 'http://localhost/skylerdong.com-gen2/public_html');
  }
} else
    define("PATH", $_SERVER['SERVER_NAME']);
?>
