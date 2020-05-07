<!-- Config -->
<?php
if ($_SERVER['HTTP_HOST'] === 'localhost') {
  if (strpos(dirname(__FILE__), 'my-web/src')) {
    define('PATH', 'http://localhost/my-web/src/public_html');
  }
} else
    define("PATH", 'https://skylerdong.com');
    // define("PATH", $_SERVER['HTTP_HOST']);
?>
