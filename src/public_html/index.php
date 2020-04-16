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
      <div class="col-12">
        <ul>
          <li>I grew up in <a href="https://www.tripadvisor.com/Tourism-g297452-Dalian_Liaoning-Vacations.html?fid=8910bef2-878f-4d38-b12a-8db31df194ba" target="_blank">Dalian</a>, a city on the northern coast line of China. I love seafood.</li>
          <li>I graduated from <a href="https://www.beloit.edu" target="_blank">Beloit College</a>, Wisconsin with a Geology major and a Physics minor.</li>
          <li>I went to <a href="https://www.jsg.utexas.edu" target="_blank">geoscience graduate school</a> at <a href="https://www.utexas.edu" target="_blank">the University of Texas at Austin</a> to study <a href="https://www.jsg.utexas.edu/news/2017/10/fueling-the-future/" target="_blank">methane hydrate</a>.</li>
          <li>Now I'm pursuing a career in web development.</li>
          <li>Read about <a href="./blog/this-website.php">how I'm building this website</a> with HTML, CSS, JavaScript (including JQuery), PHP and MySQL.</li>
        </ul>
      </div>
    </div>
    <!--row-->
  </div>
  <!--maincontent-->
  <?php include_once 'common/footer.php'; ?>
</body>
</html>
