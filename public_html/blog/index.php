<?php
  include_once '../common/config.php';
  define("MASTHEAD_SIZE",'SM');
  define("NAVBAR_COLOR",'light');
  define("BG_IMG_MD",'photography/SD_N18_5431_2_Web.jpg');
  define("BG_IMG_LG",'large/SD_N18_5431_2_Web_Large.jpg');
  define("SITE_TITLE",'Blog');
  define("SITE_SUBTITLE",'<p>A mix of things I learned, helpful tips and random thoughts</p><p>Check out <a href="'.PATH.'/app">my web apps</a> and <a href="'.PATH.'/photography/">photos</a></p>');
?>
<!doctype html>
<?php
  include_once '../common/htmlTag.php';
?>
<head>
  <?php include_once '../common/head.php';?>
  <meta name="keywords" content="personal website,blog">
  <title>Blog - Skyler Dong</title>
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
      <button type="button" class="filter-button btn btn-outline-success active" data-class="all">All</button>
      <button type="button" class="filter-button btn btn-outline-success" data-class="coding">Coding</button>
      <button type="button" class="filter-button btn btn-outline-success" data-class="photograhy">Photography</button>
      <button type="button" class="filter-button btn btn-outline-success" data-class="travel">Travel</button>
      <button type="button" class="filter-button btn btn-outline-success" data-class="helpful-tips">Helpful&nbsp;Tips</button>
      <hr/>
    </div><!--FILTER BUTTON-->
    <div class="col-12 mx-auto col-md-10">
      <div class="post-preview filterE" data-class="coding">
        <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="coding">Coding</button>
        <a href="css-animated-hamburger.php">
          <h2 class="post-title">
            CSS-Animated Hamburger Menu Icon
          </h2>
          <h3 class="post-subtitle">
            With HTML, CSS and JavaScript (JQuery) code snippets
          </h3>
          <p class="post-meta">
            Posted on April 17, 2020
          </p>
        </a>
        <hr/>
      </div><!--post-preview-->
      <div class="post-preview filterE" data-class="coding">
        <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="coding">Coding</button>
        <a href="why-i-use-scss.php">
          <h2 class="post-title">
            Why I Use SCSS as My Preferred CSS Preprocessor
          </h2>
          <h3 class="post-subtitle">
            SCSS made my life so much easier
          </h3>
          <p class="post-meta">
            Posted on April 16, 2020
          </p>
        </a>
        <hr/>
      </div><!--post-preview-->
      <div class="post-preview filterE" data-class="coding">
        <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="coding">Coding</button>
        <a href="filter-buttons-javascript.php">
          <h2 class="post-title">
            Interactive Filtering Buttons and Updating URL Parameters using JavaScript
          </h2>
          <h3 class="post-subtitle">
            Apply filter and update URL parameters when a filter button is clicked
          </h3>
          <p class="post-meta">
            Posted on April 13, 2020
          </p>
        </a>
        <hr/>
      </div><!--post-preview-->
      <div class="post-preview filterE" data-class="coding">
        <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="coding">Coding</button>
        <a href="this-website.php">
          <h2 class="post-title">
            How I'm Building This Website
          </h2>
          <h3 class="post-subtitle">
            With HTML, CSS, JavaScript, PHP and MySQL
          </h3>
          <p class="post-meta">
            Updated on April 13, 2020. Posted on March 23, 2020
          </p>
        </a>
        <hr/>
      </div><!--post-preview-->
      <div class="post-preview filterE" data-class="coding">
        <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="coding">Coding</button>
        <a href="scrape-google-trends.php">
          <h2 class="post-title">
            How to Scrape Google Trends with Object-Oriented Python
          </h2>
          <h3 class="post-subtitle">
            With exception handling feature
          </h3>
          <p class="post-meta">
            Posted on April 7, 2020
          </p>
        </a>
        <hr/>
      </div><!--post-preview-->
      <div class="post-preview filterE" data-class="photograhy">
        <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="photograhy">Photography</button>
        <a href="photo-color-grading.php">
          <h2 class="post-title">
            How to Color Grade Your Photographs to Make Art
          </h2>
          <h3 class="post-subtitle">
            &quot;You don&apos;t take a photograph, you make it.&quot; &mdash; Ansel Adams
          </h3>
          <p class="post-meta">
            Posted on April 2, 2020
          </p>
        </a>
        <hr/>
      </div><!--POST-PREVIEW-->
      <div class="post-preview filterE" data-class="coding">
        <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="coding">Coding</button>
        <a href="helpful-resources-web-dev.php">
          <h2 class="post-title">
            Helpful Resources for Web Development
          </h2>
          <h3 class="post-subtitle">
            To share the resources that I found helpful
          </h3>
          <p class="post-meta">
            Posted on March 27, 2020
          </p>
        </a>
        <hr/>
      </div><!--post-preview-->
      <div class="post-preview filterE" data-class="travel helpful-tips">
        <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="travel">Travel</button>
        <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="helpful-tips">Helpful&nbsp;Tips</button>
        <a href="navigate-to-regional-bus-stop-at-ohare-t5.php">
          <h2 class="post-title">
            How to Navigate to Regional Bus Stops at Terminal 5 of O&#39;Hare Airport of Chicago
          </h2>
          <h3 class="post-subtitle">
            With photos
          </h3>
          <p class="post-meta">
            Posted on January 6, 2016 (Retroactively)
          </p>
        </a>
        <hr/>
      </div><!--POST-PREVIEW-->
      <div class="post-preview filterE" data-class="travel helpful-tips">
        <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="travel">Travel</button>
        <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="helpful-tips">Helpful&nbsp;Tips</button>
        <a href="navigate-to-ohare-shuttle-center-from-t123.php">
          <h2 class="post-title">
            How to Navigate to Shuttle Center from T1, T2 or T3 at O'Hare Airport of Chicago
          </h2>
          <h3 class="post-subtitle">
            Step-by-step instruction for this tricky route
          </h3>
          <p class="post-meta">
            Posted on January 6, 2016 (Retroactively)
          </p>
        </a>
        <hr/>
      </div><!--POST-PREVIEW-->
    </div><!--COL-->
    <div class="col-12 mx-auto col-md-10 col-lg-8"><!-- Older Blogs button -->
      <a class="btn btn-outline-secondary btn-block" href="older-blogs.php">Older Blogs &rarr;</a>
    </div><!--Older Blogs button-->
  </div><!--ROW-->
</div><!--maincontent-->
<?php include_once '../common/footer.php'; ?>
</body>
</html>
