<!-- Config -->
<?php
if ($_SERVER['HTTP_HOST'] === 'localhost') {
  if (strpos(dirname(__FILE__), 'build/release')) {
    define('PATH', 'http://localhost/ProjectMyWeb/build/release/public_html');
  } elseif (strpos(dirname(__FILE__), 'my-web')) {
    define('PATH', 'http://localhost/my-web/src/public_html');
  }
} else
    define("PATH", 'https://skylerdong.com');
?>
