<?php
define("NAVBAR_COLOR", 'lightdark');
define("BG_IMG_MD", 'photography/SD_N18_7039_2_Web.jpg');
define("BG_IMG_LG", 'large/SD_N18_7039_2_Web_Large.jpg');
define("SITE_TITLE", 'Hi, I&#39;m Skyler!');
define("SITE_SUBTITLE", '<p>I&#39;m an aspiring&nbsp;<a href="https://app.skylerdong.com/">web developer</a> and&nbsp;an&nbsp;<a href="'.PATH.'/photography/">amateur photographer</a></p><p>Read <a href="'.PATH.'/blog/">my blogs</a> and <a href="'.PATH.'/blog/this-website.php">how I&apos;building this website</a></p>');
define("FADE_IN", 'no');
define("FOOTER_COLOR", 'dark');
define("OG_IMAGE", PATH.'/images/other/SD-IMG_4854-Edit-Web.jpg');
?>
<!doctype html>
<?php
include_once 'common/config.php';
include_once 'common/htmlTag.php';
?>
<head>
  <?php include_once 'common/head.php'; ?>
  <meta name="keywords" content="Skyler Dong,Tiannong Dong,Tiannong Skyler Dong,personal website,online portfolio,online resume,blog">
  <title>Skyler Dong</title>
</head>
<body>
  <?php
  include_once 'common/navbar.php';
  include_once 'common/header.php';
  ?>
  <div class="container maincontent">
    <div class="row">
    </div><!--row-->
  </div><!--maincontent-->
  <?php include_once 'common/footer.php'; ?>
</body>
</html>
