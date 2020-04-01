<?php
  define("NAVBAR_COLOR",'lightdark');
  define("BG_IMG_MD",'photography/SD_N18_7039_2_Web.jpg');
  define("BG_IMG_LG",'large/SD_N18_7039_2_Web_Large.jpg');
  define("SITE_TITLE",'Hi, I&#39;m Skyler!');
  define("SITE_SUBTITLE",'<p>I&#39;m an aspiring web developer. </p><p><a href="coding/this-website.php">Read about how I&apos;m building this website.</a></p>');
  define("FADE_IN",'no');
  define("FOOTER_COLOR",'dark');
  define("OG_IMAGE",'https://skylerdong.com/images/other/SD-IMG_4854-Edit-Web.jpg');
?>
<!doctype html>
<?php
  include_once 'common/config.php';
  include_once 'common/htmlTag.php';
?>
<head>
<?php include_once 'common/head.php';?>
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
    <div class="col-12">
        <p>I'm currently building my website with HTML, CSS, JavaScript, PHP and MySQL. Read about <a href="coding/this-website.php">how I'm building this website</a>.</p>
        <p>I'm also an amateur photographer. Check out <a href="photography/">my photos</a>.</p>
    </div>
  </div><!--row-->
</div><!--maincontent-->
<?php include_once 'common/footer.php';?>
</body>
</html>
