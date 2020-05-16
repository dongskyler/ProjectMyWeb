<?php
define("MASTHEAD_SIZE", 'SM');
define("BG_IMG_MD", 'photography/SD__A6T0512_Edit_Web.jpg');
define("BG_IMG_LG", 'large/SD__A6T0512_Edit_Web_Large.jpg');
define("SITE_TITLE", 'Copyright Notice');
define("SITE_SUBTITLE", '');
define("FADE_IN", 'no');
define("OG_IMAGE", PATH.'/images/other/SD-IMG_4854-Edit-Web.jpg');
?>
<!doctype html>
<?php
include_once '../common/config.php';
include_once '../common/htmlTag.php';
?>
<head>
  <?php include_once '../common/head.php'; ?>
  <title>Copyright Notice - Skyler Dong</title>
</head>
<body>
  <?php
  include_once '../common/navbar.php';
  include_once '../common/header.php';
  ?>
  <!-- Main Content -->
  <div class="container maincontent">
    <div class="row">
      <div class="col-12 mb-3 mx-auto col-lg-10">
        <div>
          <h2 id="copyright-notice" class="anchor">Copyright notice for images</h2>
        </div>
        <div>
          <p>It is always appreciated when you refer back to my website. However, all images appearing on this domain and all subdomains are not to be downloaded or reproduced in any way without permission. If you intend to use my images by any means or purchase prints, you are welcome to <a href="<?php echo PATH; ?>/contact/">contact me</a>. Thank you.
          </p>
        </div>
      </div>
    </div>
    <!--row-->
  </div>
  <!--maincontent-->
  <?php include_once '../common/footer.php'; ?>
</body>
</html>
