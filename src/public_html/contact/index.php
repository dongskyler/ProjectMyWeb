<?php
define("MASTHEAD_SIZE", 'SM');
define("BG_IMG_MD", 'photography/SD__A6T0512_Edit_Web.jpg');
define("BG_IMG_LG", 'large/SD__A6T0512_Edit_Web_Large.jpg');
define("SITE_TITLE", 'Contact');
define("SITE_SUBTITLE", 'I&#39;m an aspiring&nbsp;<a href="https://app.skylerdong.com/">web developer</a> and&nbsp;an&nbsp;<a href="https://skylerdong.com/photography/">photographer</a>');
define("FADE_IN", 'no');
define("OG_IMAGE", 'https://skylerdong.com/images/other/SD-IMG_4854-Edit-Web.jpg');
?>
<!doctype html>
<?php
include_once '../common/config.php';
include_once '../common/htmlTag.php';
?>

<head>
  <?php include '../common/head.php'; ?>
  <title>Contact - Skyler Dong</title>
</head>

<body>
  <?php
  include_once '../common/navbar.php';
  include_once '../common/header.php';
  ?>
  <!-- Main Content -->
  <div class="container maincontent">
    <div class="row">
      <div class="col-12 mx-auto mb-3 col-md-10">
        <div class="mb-3">
          <p>Thank you for your interest in contacting me.</p>
        </div>
        <div class="hanging-indent">
          <p><a href="mailto:skyler@skylerdong.com"><i class="far fa-envelope fa-icon hvr-buzz-out"></i></a>Emails: <a href="mailto:skyler@skylerdong.com">skyler@skylerdong.com</a>, <a href="mailto:dongskyler@gmail.com">dongskyler@gmail.com</a></p>
          <p><a href="mailto:photo@skylerdong.com"><i class="fas fa-camera fa-icon hvr-buzz-out"></i></a>Photography&nbsp;inquiries: <a href="mailto:photo@skylerdong.com">photo@skylerdong.com</a></p>
          <p><a href="https://www.linkedin.com/in/dongt/" target="_blank"><i class="fab fa-linkedin-in fa-icon hvr-buzz-out"></i></a>LinkedIn: <a href="https://www.linkedin.com/in/dongt/" target="_blank">Tiannong&nbsp;"Skyler"&nbsp;Dong</a></p>
          <p><a href="https://github.com/dongskyler" target="_blank"><i class="fab fa-github fa-icon hvr-buzz-out"></i></a>GitHub: <a href="https://github.com/dongskyler" target="_blank">Skyler&nbsp;Dong</a></p>
          <!--<p><a href="https://gitlab.com/dongskyler" target="_blank"><i class="fab fa-gitlab fa-icon hvr-buzz-out"></i></a>GitLab: <a href="https://gitlab.com/dongskyler" target="_blank">Skyler&nbsp;Dong</a></p>-->
          <p><a href="https://www.instagram.com/skyler.dong.art/" target="_blank"><i class="fab fa-instagram fa-icon hvr-buzz-out"></i></a>Instagram: <a href="https://www.instagram.com/skyler.dong.art/" target="_blank">@skyler.dong.art</a></p>
        </div>
        <div class="mb-3">
          <p>If you have any comments or suggestions about my website, please feel free to contact me.</p>
        </div>
      </div>
    </div>
  </div>
  <!--maincontent-->
  <?php include '../common/footer.php'; ?>
</body>
</html>
