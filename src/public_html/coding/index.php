<?php
  define("BG_IMG_MD",'medium/SD__A7T3305_Web.jpg');
  define("BG_IMG_LG",'large/SD__A7T3305_Web_LG.jpg');
  define("SITE_TITLE",'Coding');
  define("SITE_SUBTITLE",'I&apos;m an aspiring web developer.');
?>
<!doctype html>
<?php
    include_once '../common/config.php';
    include_once '../common/htmlTag.php';
?>
<head>
    <?php include_once '../common/head.php'; ?>
    <title>Coding - Skyler Dong</title>
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
          <a href="scrape-google-trends.php">
            <h2 class="post-title">
              How to Scrape Google Trends with Object-Oriented Python
            </h2>
            <h3 class="post-subtitle">
              With exception handling feature
            </h3>
          </a>
          <hr/>
        </div><!--post-preview-->
        <div class="post-preview">
          <a href="this-website.php">
            <h2 class="post-title">
            How I'm Building This Website
            </h2>
            <h3 class="post-subtitle">
              With HTML, CSS, JavaScript, PHP and MySQL
            </h3>
          </a>
          <hr/>
        </div><!--post-preview-->
        <div class="post-preview">
          <a href="helpful-resources.php">
            <h2 class="post-title">
            Helpful Resources
            </h2>
            <h3 class="post-subtitle">
              To share the resources that I found helpful
            </h3>
          </a>
          <hr/>
        </div><!--post-preview-->
      </div><!--COL-->
  </div><!--ROW-->
</div><!--maincontent-->
<?php include_once '../common/footer.php'; ?>
</body>
</html>
