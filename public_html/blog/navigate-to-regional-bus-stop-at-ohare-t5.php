<?php
  include_once '../common/config.php';
  include_once '../common/methods.php';
  define("NAVBAR_COLOR",'light');
  define("HEADER_TYPE",'blogpost');
  define("BG_IMG_MD",'blog/IMG_20150114_181603.jpg');
  define("BG_IMG_LG",'blog/IMG_20150114_181603.jpg');
  define("SITE_TITLE",'How to Navigate to Regional Bus Stops at Terminal 5 of O&#39;Hare Airport of Chicago');
  define("SITE_SUBTITLE",'Step-by-step instruction');
  define("SITE_SUBSUBTITLE",'<p>Updated on March 29, 2020</p><p>Posted on Jan. 6, 2016 (Retroactively)</p>');
?>
<!doctype html>
<?php
  include_once '../common/htmlTag.php';
?>
<head>
    <?php include_once '../common/head.php';?>
    <title>Navigate to Regional Bus Stops at Terminal 5 of O&#39;Hare Airport | Blog - Skyler Dong</title>
</head>
<body>
<?php
  include_once '../common/navbar.php';
  include_once '../common/header.php';
?>
<!-- Blog Content -->
<div class="container maincontent">
  <div class="row">
    <div class="col-12">
      <p>This blog shows you how to navigate to regional bus stops at Terminal 5 (T5) of O&#39;Hare Airport of Chicago, with step-by-step instructions to <a href="https://web.coachusa.com/vangalder/" target="_blank" rel=”noreferrer”>Van Galder</a> bus stop</p>
      <p>If you will arrive at Terminals 1, 2, or 3, the route is different. <a href="navigate-to-ohare-shuttle-center-from-t123.php">Click here for instructions</a>.</p>
      <p>Feel free to print a copy of this webpage and bring it with you for your personal, non-commercial use.</p>
      <!--简体中文版请点击这里-->
      <hr/>
      <p>The floor plan of Terminal 5 is fairly straightforward. After the baggage claim, you walk directly into the lobby. When you walk out of any exit and walk across the road, you'll arrive at an island. Regional bus stops are along the island.</p>
      <p>The signage for different buses are not clear. Originally, I wrote this blog for <a href="https://web.coachusa.com/vangalder/" target="_blank" rel=”noreferrer”>Van Galder</a> bus. I apologize that I don't have step-by-step instructions for other buses, but all of them are somewhere along the island. For example, buses to Indianapolis are closer to Exit 5B and 5C. <a href="https://web.coachusa.com/vangalder/" target="_blank" rel=”noreferrer”>Van Galder</a> bus is closer to Exit 5E. If you have information and photos on different buses, I appreciate it if you could <a href="../contact/">contact me</a> to make this blog better for other travelers.</p>
      <div><?php loadImage_blog('IMG_20150114_175520.jpg');?></div>
      <p>If you will take the <a href="https://web.coachusa.com/vangalder/" target="_blank" rel=”noreferrer”>Van Galder</a> bus, look for Exit 5E near the McDonald&apos;s. Exit 5E is annotated by the yellow arrow in the photo.</p>
      <div><?php loadImage_blog('IMG_20150114_175251.jpg');?></div>
      <p>Walk out of Exit 5E and walk across the road to the island. Turn right and walk about 100 feet (30 meters) on the island."</p>
      <div class="row photo-block">
        <div class="col-md-6 mx-auto">
            <?php loadImage_blog('VanGalderBusStopAtT5Ohare_1.jpg');?>
            <div class="text-center"><p>Photo credit of Erica Elliott</p></div>
        </div>
        <div class="col-md-6 mx-auto">
            <?php loadImage_blog('VanGalderBusStopAtT5Ohare_2.jpg');?>
            <div class="text-center"><p>Photo credit of Erica Elliott</p></div>
        </div>
      </div><!--ROW-->
      <p>The <a href="https://web.coachusa.com/vangalder/" target="_blank" rel=”noreferrer”>Van Galder</a> bus stop is near the bus stop shelter on the far end of this island. Unfortunately, there is no obvious sign saying "<a href="https://web.coachusa.com/vangalder/" target="_blank" rel=”noreferrer”>Van Galder</a>." Special thanks to Erica Elliott for providing the last two photos.</p>
      <p>Have a safe trip!</p>
      <hr/>
      <p>This blog was originally posted on <a href="https://sites.google.com/site/dongskyler/nav-ohare/van-galder-t5" target="_blank" rel=”noreferrer”>my old website</a>. If you have any suggestion or question, please feel free to <a href="../contact/">contact me</a>. <i class="fas fa-ankh"></i></p>
    </div><!--COL-->
  </div><!--ROW-->
</div><!--maincontent-->
<?php include_once '../common/footer.php';?>
</body>
</html>
