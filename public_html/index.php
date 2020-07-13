<?php
include_once 'common/config.php';
define("NAVBAR_COLOR", 'lightdark');
define("BG_IMG_MD", 'photography/SD_N18_7039_2_Web.jpg');
define("BG_IMG_LG", 'large/SD_N18_7039_2_Web_Large.jpg');
define("SITE_TITLE", 'Hi, I&#39;m Skyler!');
define("SITE_SUBTITLE", '<p>I&#39;m an aspiring&nbsp;<a href="' . PATH . '/app">web developer</a> and&nbsp;an&nbsp;<a href="' . PATH . '/photography/">amateur photographer</a></p><p>Read <a href="' . PATH . '/blog/">my blogs</a> and <a href="' . PATH . '/blog/this-website.php">how I&apos;building this website</a></p>');
define("FADE_IN", 'no');
define("FOOTER_COLOR", 'dark');
define("OG_IMAGE", PATH . '/images/other/SD-IMG_4854-Edit-Web.jpg');
?>
<!doctype html>
<?php
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
      <ul>
        <li>You're looking at the 2nd-generation of my personal website, built with PHP, JavaScript, and jQuery. Check out the <a href="https://github.com/dongskyler/gen2.skylerdong.com" target="_blank" rel="noferrer noopener">source code on GitHub</a>.</li>
        <li>
          Currently, I'm building a <a href="https://gen3.skylerdong.com/" target="_blank" rel="noferrer noopener">new 3rd-generation website</a> with a React front-end, a Node/Express back-end and cloud-based MongoDB (on AWS), with a Continuous Integration approach and a <a href="https://github.com/dongskyler/api.skylerdong.com#Architecture" target="_blank" rel=”noreferrer”>plug-in architecture</a>:
          <ul>
            <li><a href="https://gen3.skylerdong.com/" target="_blank" rel=”noreferrer”>New website.</a>
            </li>
            <li><a href="https://api.skylerdong.com/" target="_blank" rel=”noreferrer”>New API back-end.</a>
            </li>
          </ul>
        </li>
        <li>
          Download my resume <a href="https://api.skylerdong.com/resume/" target="_blank" rel="noferrer noopener">here</a>.
        </li>
        <li>
          I also co-founded <a href="https://badwaterbay.com/" target="_blank" rel=”noreferrer”>BadwaterBay</a>, a group of people who code open-source projects. <a href="https://github.com/BadwaterBay" target="_blank" rel=”noreferrer”>Check us out on GitHub</a>!
        </li>
      </ul>
    </div>
    <!--row-->
  </div>
  <!--maincontent-->
  <?php include_once 'common/footer.php'; ?>
</body>

</html>
