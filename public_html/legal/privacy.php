<?php
include_once '../common/config.php';
define("MASTHEAD_SIZE", 'SM');
define("BG_IMG_MD", 'photography/SD__A6T0512_Edit_Web.jpg');
define("BG_IMG_LG", 'large/SD__A6T0512_Edit_Web_Large.jpg');
define("SITE_TITLE", 'Privacy Policy');
define("SITE_SUBTITLE", '');
define("FADE_IN", 'no');
define("OG_IMAGE", PATH.'/images/other/SD-IMG_4854-Edit-Web.jpg');
?>
<!doctype html>
<?php
include_once '../common/htmlTag.php';
?>
<head>
  <?php include_once '../common/head.php'; ?>
  <title>Privacy Policy - Skyler Dong</title>
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
          <p>After an hour of research on how to write a privacy policy, I deemed it too complicated for this tiny personal website.
          </p>
          <p>In lieu of writing a 3,000-word essay like <a href="https://termly.io/resources/templates/privacy-policy-template/" target="_blank" rel=”noreferrer”>this one</a>, let me put it in layman's terms.
          </p>
          <p>I use Google Analytics to understand how users visit my website. I'm not interested in your personal data. This is for me to improve my website. I use a rather bare minimum Google Analytics configuration.
          </p>
          <!--<p>The following features are off:</p>
          <ul>
            <li>Demographics and Interest Report</li>
            <li>Enhanced link attribution</li>
            <li>Remarketing</li>
            <li>Advertising Reporting Features</li>
            <li>User-ID feature</li>
          </ul>-->
          <p>If you have any further questions about how I collect your data, you are welcome to <a href="<?php echo PATH; ?>/contact/">contact me</a>. Thank you.
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
