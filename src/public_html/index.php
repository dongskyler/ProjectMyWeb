<?php
define("NAVBAR_COLOR", 'lightdark');
define("BG_IMG_MD", 'photography/SD_N18_7039_2_Web.jpg');
define("BG_IMG_LG", 'large/SD_N18_7039_2_Web_Large.jpg');
define("SITE_TITLE", 'Hi, I&#39;m Skyler!');
define("SITE_SUBTITLE", 'I&#39;m an aspiring&nbsp;<a href="https://app.skylerdong.com/">web developer</a> and&nbsp;an&nbsp;<a href="https://skylerdong.com/photography/">photographer</a>');
define("FADE_IN", 'no');
define("FOOTER_COLOR", 'dark');
define("OG_IMAGE", 'https://skylerdong.com/images/other/SD-IMG_4854-Edit-Web.jpg');
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
      <div class="col-12 mx-auto col-md-10">
        <p>Check out:</p>
        <div class="animated-icon2"><span></span><span></span><span></span><span></span></div>
        <div class="dummy-line"><span></span></div>
        <ul>
          <li><a href="https://skylerdong.com/blog/this-website.php">How I'm building this website</a> and <a href="blog/">other blogs</a></li>
          <li>My <a href="https://app.skylerdong.com/">web apps</a>, including data visualizations</li>
          <li>My <a href="photography/">photo gallery</a> as a photo gallery as well as a web app</li>
        </ul>
      </div>
    </div><!--row-->
  </div><!--maincontent-->
  <?php include_once 'common/footer.php'; ?>
</body>
</html>
