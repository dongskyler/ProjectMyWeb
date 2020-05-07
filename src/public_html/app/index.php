<?php
define("MASTHEAD_SIZE", 'SM');
define("BG_IMG_MD", 'medium/SD__A7T3305_Web.jpg');
define("BG_IMG_LG", 'large/SD__A7T3305_Web_LG.jpg');
define("SITE_TITLE", 'App');
define("SITE_SUBTITLE", '<p>I&apos;m an aspiring web developer</p><p>Read <a href="https://skylerdong.com/blog/?category=coding">my blogs on coding</a> and <a href="https://skylerdong.com/blog/this-website.php">how I&apos;building this website</a></p>');
define("FADE_IN", 'no');
define("FOOTER_COLOR", 'dark');
define("OG_IMAGE", 'https://skylerdong.com/images/other/SD-IMG_4854-Edit-Web.jpg');
?>
<!doctype html>
<?php
include_once '../common/config.php';
include_once '../common/htmlTag.php';
?>
<head>
  <?php include_once '../common/head.php'; ?>
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
      <div class="filter-button-bar col-12 mx-auto col-md-10">
        <button type="button" class="filter-button btn btn-outline-primary active" data-class="all">All</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="d3-js">D3.js</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="google-maps-api">Google&nbsp;Maps&nbsp;API</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="html-css">HTML&nbsp;+&nbsp;CSS</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="javascript">JavaScript</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="mysql">MySQL</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="php">PHP</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="python">Python</button>
        <hr/>
      </div><!--FILTER BUTTON-->
      <div class='col-12 mx-auto col-md-10'>
        <div class="post-preview filterE" data-class="d3-js javascript python">
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="d3-js">D3.js</button>
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="javascript">JavaScript</button>
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="python">Python</button>
          <a href="<?php echo ($_SERVER["SERVER_NAME"] == "localhost") ? 'camera-search-trends/' : 'https://app.skylerdong.com/camera-search-trends' ?>">
            <h2 class="post-title">Camera Brand Trends of Canon, Nikon and Sony</h2>
            <h3 class="post-subtitle">Comparing Google keyword search trends of camera, DSLR and mirrorless across Canon, Nikon and Sony</h3>
          </a>
          <hr/>
        </div>
        <!--post-preview-->
        <div class="post-preview filterE" data-class="google-maps-api javascript">
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="google-maps-api">Google&nbsp;Maps&nbsp;API</button>
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="javascript">JavaScript</button>
          <a href="<?php echo ($_SERVER["SERVER_NAME"] == "localhost") ? 'route-optimization/' : 'https://app.skylerdong.com/route-optimization' ?>">
            <h2 class="post-title">Route Optimization</h2>
            <h3 class="post-subtitle">Find the fastest route with multiple stops using JavaScript and Google Map API</h3>
          </a>
          <hr/>
        </div>
        <!--post-preview-->
        <div class="post-preview filterE" data-class="html-css javascript mysql php">
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="html-css">HTML&nbsp;+&nbsp;CSS</button>
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="javascript">JavaScript</button>
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="mysql">MySQL</button>
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="php">PHP</button>
          <a href="https://skylerdong.com/blog/this-website.php">
            <h2 class="post-title">
              How I'm Building This Website
            </h2>
            <h3 class="post-subtitle">
              With HTML, CSS, JavaScript, PHP and MySQL
            </h3>
            <!--<p class="post-meta">
            Updated on April 13, 2020. Posted on March 23, 2020
            </p>-->
          </a>
          <hr/>
        </div><!--post-preview-->
      </div><!--COL-->
    </div><!--ROW-->
  </div><!--maincontent-->
  <?php include_once '../common/footer.php'; ?>
</body>
</html>
