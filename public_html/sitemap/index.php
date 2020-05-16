<?php
include_once '../common/config.php';
define("MASTHEAD_SIZE", 'SM');
define("BG_IMG_MD", 'photography/SD__A6T0512_Edit_Web.jpg');
define("BG_IMG_LG", 'large/SD__A6T0512_Edit_Web_Large.jpg');
define("SITE_TITLE", 'Site Map');
define("SITE_SUBTITLE", '');
define("FADE_IN", 'no');
define("OG_IMAGE", '<?php echo PATH;?>/images/other/SD-IMG_4854-Edit-Web.jpg');
?>
<!doctype html>
<?php
include_once '../common/htmlTag.php';
?>
<head>
  <?php include_once '../common/head.php'; ?>
  <title>Site Map - Skyler Dong</title>
</head>
<body>
  <?php
  include_once '../common/navbar.php';
  include_once '../common/header.php';
  ?>
  <!-- Main Content -->
  <div class="container maincontent">
    <div class="row">
    <div class="col-12 mx-auto col-md-10">
      <div class="sitemap">
        <div class="sitemap-section">
          <h2>App</h2>
          <ul>
            <li><a href="<?php echo PATH; ?>/app/route-optimization">Route Optimization</a></li>
            <li><a href="<?php echo PATH; ?>/app/camera-search-trends">Camera Brand Trends of Canon, Nikon and Sony</a></li>
          </ul>
        </div>
        <div class="sitemap-section">
          <h2>About</h2>
          <ul>
            <li><a href="<?php echo PATH;?>/about/#about-me">About Me</a></li>
            <li><a href="<?php echo PATH;?>/about/#copyright-notice">Copyright Notice for Images</a></li>
          </ul>
        </div>
        <div class="sitemap-section">
          <h2>Blog</h2>
          <ul>
            <li><a href="<?php echo PATH;?>/blog/this-website.php">How I'm Building This Website</a></li>
            <li><a href="<?php echo PATH;?>/blog/scrape-google-trends.php">How to Scrape Google Trends with Object-Oriented Python</a></li>
            <li><a href="<?php echo PATH;?>/blog/photo-color-grading.php">How to Color Grade Your Photographs to Make Art</a></li>
            <li><a href="<?php echo PATH;?>/blog/helpful-resources-web-dev.php">
            How to Scrape Google Trends with Object-Oriented Python</a></li>
            <li><a href="<?php echo PATH;?>/blog/helpful-resources-web-dev.php">Helpful Resources for Web Development</a></li>
            <li><a href="<?php echo PATH;?>/blog/navigate-to-regional-bus-stop-at-ohare-t5.php">How to Navigate to Regional Bus Stops at Terminal 5 of O'Hare Airport of Chicago</a></li>
            <li><a href="<?php echo PATH;?>/blog/navigate-to-ohare-shuttle-center-from-t123.php">How to Navigate to Shuttle Center from T1, T2 or T3 at O'Hare Airport of Chicago</a></li>
          </ul>
        </div>
        <div class="sitemap-section">
          <h2>Photography</h2>
          <ul>
            <li><a href="<?php echo PATH;?>/photography">All photos</a></li>
          </ul>
        </div>
        <div class="sitemap-section">
          <h2>Contact</h2>
          <ul>
            <li><a href="<?php echo PATH;?>/contact">Contact me</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div><!--row-->
  </div><!--maincontent-->
  <?php include_once '../common/footer.php'; ?>
</body>
</html>
