<!-- Config -->
<?php
if ($_SERVER['HTTP_HOST'] === 'localhost') {
  if (strpos(dirname(__FILE__), 'my-web-gen2')) {
    define('PATH', 'http://localhost/my-web-gen2/html');
  }
} else
    define("PATH", '.');
?>
