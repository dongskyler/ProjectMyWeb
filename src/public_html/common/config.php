<!-- Config -->
<?php
    if ($_SERVER["SERVER_NAME"] == "localhost") {
        if (strpos(dirname(__FILE__),'build/release')) {
            define("PATH",'http://localhost/ProjectMyWeb/build/release/public_html');
        }
        elseif (strpos(dirname(__FILE__),'src')) {
            define("PATH",'http://localhost/ProjectMyWeb/src/public_html');
        }
    }
    else
        define("PATH",'https://skylerdong.com');
?>
