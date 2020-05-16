<?php
  include_once '../common/config.php';
  define("MASTHEAD_SIZE",'SM');
  define("NAVBAR_COLOR",'light');
  define("BG_IMG_MD",'photography/SD_N18_5431_2_Web.jpg');
  define("BG_IMG_LG",'large/SD_N18_5431_2_Web_Large.jpg');
  define("SITE_TITLE",'Older Blogs');
  define("SITE_SUBTITLE",'');
  define("FADE_IN",'yes');
?>
<!doctype html>
<?php
  include_once '../common/htmlTag.php';
?>
<head>
    <?php include_once '../common/head.php'; ?>
    <title>Older Blogs | Blog - Skyler Dong</title>
</head>
<body>
<?php
  include_once '../common/navbar.php';
  include_once '../common/header.php';
?>
<div class="container maincontent">
  <div class="row">
    <div class="col-12">
      <div><p>Thank you for your interest in my older blogs. However, if you see this message, it means I don't have "older blogs." This is merely a place holder.</p>
        <p>When I have more than 20 blogs, the oldest blogs will be automatically moved to this page so that the <a href="../blog/">blog page</a> contains only 20 blogs, powered by PHP. Read about <a href="this-website.php">how I'm building this website</a>.</p></div>
    </div><!--COL-->
  </div><!--ROW-->
</div><!--maincontent-->
<?php include_once '../common/footer.php'; ?>
</body>
</html>
