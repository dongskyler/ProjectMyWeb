<!-- Config -->
<?php
if ($_SERVER['HTTP_HOST'] === 'localhost') {
  if (strpos(dirname(__FILE__), 'build/release')) {
    define('PATH', 'http://localhost/my-web/build/release/public_html');
  } elseif (strpos(dirname(__FILE__), 'my-web/src')) {
    define('PATH', 'http://localhost/my-web/src/public_html');
  } elseif (strpos(dirname(__FILE__), 'camera-trends/src')) {
    define('PATH', 'http://localhost/camera-trends/src');
  }
} else
    define("PATH", 'https://skylerdong.com');
    // define("PATH", $_SERVER['HTTP_HOST']);
?>
