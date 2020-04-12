<?php
  define("BG_IMG_MD",'medium/SD__A7T3305_Web.jpg');
  define("BG_IMG_LG",'large/SD__A7T3305_Web_LG.jpg');
  define("SITE_TITLE",'App');
  define("SITE_SUBTITLE",'I&apos;m an aspiring web developer.');
  define("FADE_IN",'no');
  define("FOOTER_COLOR",'dark');
  define("OG_IMAGE",'https://skylerdong.com/images/other/SD-IMG_4854-Edit-Web.jpg');
?>
<!doctype html>
<?php
include_once '../common/config.php';
include_once '../common/htmlTag.php';
?>
<head>
<?php include_once '../common/head.php';?>
<title>App - Skyler Dong</title>
<link rel="canonical" href="https://app.skylerdong.com" />
</head>
<body>
<?php
include_once '../common/navbar.php'; 
include_once '../common/header.php';
?>
<!-- Main Content -->
<div class="container maincontent">
    <div class="row">
      <div class='col-12 mx-auto col-md-10'>
        <div class="post-preview">
          <a href="<?php echo ($_SERVER["SERVER_NAME"]=="localhost") ? 'camera-search-trends/' : 'https://camera-search-trends.app.skylerdong.com' ?>">
            <h2 class="post-title">Camera Brand Search Trends of Canon, Nikon and Sony</h2>
            <h3 class="post-subtitle">Comparing Google keyword search trends of camera, DSLR mirrorless of Canon, Nikon and Sony brands</h3>
          </a>
          <hr/>
        </div><!--post-preview-->
        <div class="post-preview">
          <a href="<?php echo ($_SERVER["SERVER_NAME"]=="localhost") ? 'route-optimization/' : 'https://route-optimization.app.skylerdong.com' ?>">
            <h2 class="post-title">Route optimization</h2>
            <h3 class="post-subtitle">Find the fastest route with multiple stops using JavaScript and Google Map API</h3>
          </a>
          <hr/>
        </div><!--post-preview-->
      </div><!--COL-->
  </div><!--ROW-->
</div><!--maincontent-->
<?php include_once '../common/footer.php'; ?>
</body>
</html>
