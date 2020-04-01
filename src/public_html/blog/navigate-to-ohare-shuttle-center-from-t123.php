<?php
  define("NAVBAR_COLOR",'light');
  define("HEADER_TYPE",'blogpost');
  define("BG_IMG_MD",'blog/IMG_20150114_181603.jpg');
  define("BG_IMG_LG",'blog/IMG_20150114_181603.jpg');
  define("SITE_TITLE",'<h1>How to Navigate to Shuttle Center from T1, T2, or T3 at O&#39;Hare Airport of Chicago</h1>');
  define("SITE_SUBTITLE",'Step-by-step instruction');
  define("SITE_SUBSUBTITLE",'Updated on March 22, 2020<br/>Posted on Jan. 6, 2016 (Retroactively)');
?>
<!doctype html>
<?php
  include_once '../common/config.php';
  include_once '../common/htmlTag.php';
?>
<head>
    <?php include_once '../common/head.php';?>
    <title>Navigate to Shuttle Center from T1, T2, or T3 at O&#39;Hare Airport | Blog - Skyler Dong</title>
</head>
<body>
<?php
  include_once '../common/navbar.php';
  include_once '../common/header.php';
  function loadImage($image){
    list($width,$height)=getimagesize('../images/blog/'.$image);
    $aspect=round($height/$width*10000)/100;
    echo '<div class="responsive-container" style="padding-bottom:',$aspect,'%;">','<img class="lozad" data-src="../images/blog/',$image,'" alt="Blog - SkylerDong.com"></div>',"\r\n";
  }
?>
<!-- Blog Content -->
<div class="container maincontent">
  <div class="row">
    <div class="col-12 mx-auto col-md-10">
      <p>This blog shows you how to navigate to the Shuttle Center from Terminal 1, 2, or 3 at O&#39;Hare Airport of Chicago with step-by-step instructions.</p>
      <p>If you will arrive at Terminal 5, the route is different. Most buses make a stop at Terminal 5. <a href="navigate-to-regional-bus-stop-at-ohare-t5.php">Click here for instructions</a>.</p>
      <p>Feel free to print a copy of this webpage and bring it with you for your personal, non-commercial use.</p>
      <!--简体中文版请点击这里-->
      <hr/>
      <div class="row">
        <div class="col-md-6 mx-auto">
            <?php loadImage('IMG_20150114_181417.jpg');?>
        </div>
        <div class="col-md-6 mx-auto">
            <?php loadImage('IMG_20150114_181503.jpg');?>
        </div>
      </div><!--ROW-->
      <p>Once you arrive at Terminal 1, 2, or 3, look up, physically. Look for the signs "Bus/Shuttle Center" as circled in the pictures above. Follow the signs and find your way to go down one floor via escalator, elevator, or stairs.</p>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <?php loadImage('IMG_20150114_181620.jpg');?>
        </div>
        <div class="col-md-6 mx-auto">
          <?php
          loadImage('IMG_20150114_181526.jpg');
          loadImage('IMG_20150114_181603.jpg');
          ?>
        </div>
      </div><!--ROW-->
      <p>Or you can follow the big red arrows on the floor.</p>
      <p>Once you arrive at the lower level, follow signs hung from the ceiling or on the floor. This walk might take a few minutes.</p>
      <div><?php loadImage('IMG_20150114_191549.jpg');?></div>
      <p>Keep walking while following the signs.</p>
      <div><?php loadImage('IMG_20150114_191512.jpg');?></div>
      <p>Keep walking until you see a large sign saying "Elevator Center" and "Elevators to Bus/Shuttle Center."</p>
      <div><?php loadImage('IMG_20150114_191422.jpg');?></div>
      <p>There are several elevators that can take you to the Shuttle Center. Walk into one of them. Then you might find elevator buttons confusing. Especially, for someone who just took a 16-hour-long flight.</p>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <?php loadImage('IMG_20150114_191353.jpg');?>
        </div>
        <div class="col-md-6 mx-auto">
          <?php loadImage('IMG_20150114_191309.jpg');?>
        </div>
      </div><!--ROW-->
      <p>Let me explain. You are currently at the Terminal (T) level and you want to reach the 1st level, so press the button next to "P1," which is also in the same row with "1" and "Chicago Cubs."</p>
      <p>Walk out of the elevator. Look around. You will see a big sign saying "Bus/Shuttle Center." Walk through these doors, turn left, and walk through another set of doors. You are almost there.</p>
      <p>Well done! Now you are at the Shuttle Center! Several shuttles will pick passengers up right outside the lobby. For example, the bus stop of <a href="https://web.coachusa.com/vangalder/" target="_blank">Van Galder Bus</a> is outside Door 3.</p>
      <p>Have a safe trip!</p>
      <hr/>
      <p>This blog was originally posted on <a href="https://sites.google.com/site/dongskyler/nav-ohare/" target="_blank">my old website</a>. If you have any suggestion or question, please feel free to <a href="../contact/">contact me</a>.</p>
    </div><!--COL-->
  </div><!--ROW-->
</div><!--maincontent-->
<?php include_once '../common/footer.php';?>
</body>
</html>
