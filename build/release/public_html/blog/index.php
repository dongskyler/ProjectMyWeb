<?php
  define("NAVBAR_COLOR",'light');
  define("BG_IMG_MD",'photography/SD_N18_5431_2_Web.jpg');
  define("BG_IMG_LG",'large/SD_N18_5431_2_Web_Large.jpg');
  define("SITE_TITLE",'Blog');
  define("SITE_SUBTITLE",'A mix of things I learned, helpful tips, and random thoughts.');
?>
<!doctype html>
<?php
  include_once '../common/config.php';
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
      <div class="col-12 mx-auto col-md-10">
        <div class="post-preview">
          <a href="navigate-to-regional-bus-stop-at-ohare-t5.php">
            <h2 class="post-title">
              How to Navigate to Regional Bus Stops at Terminal 5 of O&#39;Hare Airport of Chicago
            </h2>
            <h3 class="post-subtitle">
                
            </h3>
          </a>
          <p class="post-meta">Posted on January 6, 2016 (Retroactively)</p>
          <hr/>
        </div><!--POST-PREVIEW-->
        <div class="post-preview">
          <a href="navigate-to-ohare-shuttle-center-from-t123.php">
            <h2 class="post-title">
            How to Navigate to Shuttle Center from T1, T2, or T3 at O'Hare Airport of Chicago
            </h2>
            <h3 class="post-subtitle">
              Step-by-step instruction.
            </h3>
          </a>
          <p class="post-meta">Posted on January 6, 2016 (Retroactively)</p>
          <hr/>
        </div><!--POST-PREVIEW-->
        <!-- Older Blogs button -->
        <div class="clearfix">
        <a class="btn btn-primary float-right" href="older-blogs.php">Older Blogs &rarr;</a>
</div>
    </div><!--COL-->
  </div><!--ROW-->
</div><!--maincontent-->
<?php include_once '../common/footer.php'; ?>
</body>
</html>
