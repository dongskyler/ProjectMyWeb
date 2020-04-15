<?php
define("MASTHEAD_SIZE", 'SM');
define("BG_IMG_MD", 'photography/SD__A6T0512_Edit_Web.jpg');
define("BG_IMG_LG", 'large/SD__A6T0512_Edit_Web_Large.jpg');
define("SITE_TITLE", 'About');
define("SITE_SUBTITLE", '<p><a href="https://skylerdong.com/blog/this-website.php">Read about how I&apos;m building this website</a></p>');
define("FADE_IN", 'no');
define("OG_IMAGE", 'https://skylerdong.com/images/other/SD-IMG_4854-Edit-Web.jpg');
?>
<!doctype html>
<?php
include_once '../common/config.php';
include_once '../common/htmlTag.php';
?>
<head>
  <?php include_once '../common/head.php'; ?>
  <title>About - Skyler Dong</title>
</head>
<body>
  <?php
  include_once '../common/navbar.php';
  include_once '../common/header.php';
  ?>
  <!-- Main Content -->
  <div class="container maincontent">
    <div class="row">
      <div class="col-12 mb-3 mx-auto col-md-10">
        <div>
          <h2 id="about-me" class="anchor">About me</h1>
        </div>
        <div class="col-12 float-none mb-3 photo-block text-center small col-sm-6 float-sm-right col-md-4">
          <img class="img-fluid" src="../images/other/SD-IMG_4854-Edit-Web.jpg" alt="Photo of Skyler Dong. Photo courtesy of Alexey Portnov.">Photo courtesy of Alexey Portnov
        </div>
        <div>
          <p>I'm Tiannong "Skyler" Dong.</p>
          <p>I'm an aspiring web developer.</p>
        </div>
        <div>I have a degree in science and I like making things and helping people.
          <ul>
            <li>I have built 2 websites in the past:
              <ul>
                <li><a href="https://sites.google.com/site/tiannongsdong/" target="_blank">My old personal website</a>, which have been online since I was an undergrad student.
                </li>
                <li><a href="https://sites.google.com/site/dongskyler/nav-ohare/shuttle-center" target="_blank">How to nagivate to the shuttle center</a> at <a href="https://www.flychicago.com/ohare/home/pages/default.aspx" target="_blank">O'Hare Airport of Chicago</a>. I made the website for new incoming students to my alma mater (Beloit College) and the general public. Many students fly to O'Hare and take an inter-state shuttle to the college. Reportedly, some people have trouble navigating to the shuttle center from terminals.</li>
                <li>In the past, I used templates and modified their HTML codes, but now I'm building this website from scratch.</li>
              </ul>
            </li>
            <li>I have built many electronic devices. To name two of them:
              <ul>
                <li><a href="https://en.wikipedia.org/wiki/Coulombmeter" target="_blank">Coulombmeters</a> for <a href="https://en.wikipedia.org/wiki/Coulometry" target="_blank">coulometric titration (a chemistry technique)</a> using <a href="https://www.raspberrypi.org/help/what-%20is-a-raspberry-pi/" target="_blank">Raspberry Pi's</a> with <a href="https://chemistry.beloit.edu/classes/lisensky/" target="_blank">my chemistry professor George Lisensky</a>.</li>
                <li>Homemade data acquisition system and <a href="https://en.wikipedia.org/wiki/Thermoelectric_cooling" target="_blank">Peltier plate</a> cooling system using an <a href="https://www.arduino.cc/en/guide/introduction" target="_blank">Arduino</a> for my graduate school research. The Arduino code was written in C.</li>
              </ul>
            </li>
          </ul>
        </div>
        <div>
          <p>I also believe technology and arts work hand in hand. I have longtime interests in design, music, calligraphy, and <a href="../photography/">photography</a>.</p>
        </div>
      </div>
      <!--column-->
      <hr>
      <div class="col-12 mb-3 mx-auto col-md-10">
        <div>
          <h2 id="copyright-notice" class="anchor">Copyright notice for images</h2>
        </div>
        <div>
          <p>It is always appreciated when you refer back to my website. However, all images appearing on this domain are not to be downloaded or reproduced in any way without permission. If you intend to use my images by any means or purchase prints, you are welcome to <a href="../contact/">contact me</a>. Thank you.
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
