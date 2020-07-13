<?php
include_once '../common/config.php';
define("MASTHEAD_SIZE", 'SM');
define("BG_IMG_MD", 'photography/SD__A6T0512_Edit_Web.jpg');
define("BG_IMG_LG", 'large/SD__A6T0512_Edit_Web_Large.jpg');
define("SITE_TITLE", 'About');
define("SITE_SUBTITLE", '<p>I&#39;m an aspiring&nbsp;<a href="' . PATH . '/app">web developer</a> and&nbsp;an&nbsp;<a href="' . PATH . '/photography/">amateur photographer</a></p><p>Read <a href="' . PATH . '/blog">my blogs here</a> and <a href="' . PATH . '/blog/this-website.php">how I&apos;building this website</a></p>');
define("FADE_IN", 'no');
define("OG_IMAGE", PATH . '/images/other/SD-IMG_4854-Edit-Web.jpg');
?>
<!doctype html>
<?php
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
      <div class="col-12 mb-3 mx-auto col-lg-10">
        <div>
          <h2 id="about-me" class="anchor">About me</h1>
        </div>
        <div>
          <p>I'm Tiannong "Skyler" Dong.</p>
          <p>I'm an aspiring web developer. Check out my <a href="https://github.com/dongskyler" target="_blank" rel="noreferrer noopener">GitHub</a>.</p>
        </div>
        <div class="col-12 float-none mb-3 photo-block text-center small col-sm-6 float-sm-right col-md-4">
          <img class="img-fluid" src="../images/other/SD-IMG_4854-Edit-Web.jpg" alt="Photo of Skyler Dong. Photo courtesy of Alexey Portnov.">Photo courtesy of Alexey Portnov
        </div>
        <div>
          <ul>
            <li>I grew up in <a href="https://www.tripadvisor.com/Tourism-g297452-Dalian_Liaoning-Vacations.html?fid=8910bef2-878f-4d38-b12a-8db31df194ba" target="_blank" rel=”noreferrer”>Dalian</a>, a city on the northern coast line of China. I love seafood.</li>
            <li>I graduated from <a href="https://www.beloit.edu" target="_blank" rel=”noreferrer”>Beloit College</a>, Wisconsin with a Geology major and a Physics minor.</li>
            <li>I went to <a href="https://www.jsg.utexas.edu" target="_blank" rel=”noreferrer”>geoscience graduate school</a> at <a href="https://www.utexas.edu" target="_blank" rel=”noreferrer”>the University of Texas at Austin</a> to study <a href="https://www.jsg.utexas.edu/news/2017/10/fueling-the-future/" target="_blank" rel=”noreferrer”>methane hydrate</a>.</li>
            <li>Now I'm pursuing a career in web development.</li>
            <li>Read about <a href="<?php echo PATH; ?>/blog/this-website.php">how I'm building this website</a> with HTML, CSS, JavaScript, PHP and MySQL.</li>
          </ul>
        </div>
        <div>I have a degree in science but I also like making things and helping people.
          <ul>
            <li>I have built 2 websites in the past:
              <ul>
                <li><a href="https://gen1.skylerdong.com/" target="_blank" rel=”noreferrer”>My old personal website</a>, which has been online since I was an undergrad student.
                </li>
                <li><a href="https://sites.google.com/site/dongskyler/nav-ohare/shuttle-center" target="_blank" rel=”noreferrer”>How to nagivate to the shuttle center</a> at <a href="https://www.flychicago.com/ohare/home/pages/default.aspx" target="_blank" rel=”noreferrer”>O'Hare Airport of Chicago</a>. I made the website for new incoming students to my alma mater (Beloit College) and the general public because many students fly to O'Hare and take an inter-state shuttle to the college. Reportedly, some people have trouble navigating to the shuttle center from terminals.</li>
                <li>In the past, I used templates, but now I'm building this website from scratch.</li>
              </ul>
            </li>
            <li>You're looking at the 2nd-generation of my personal website, built with PHP, JavaScript, and jQuery.</li>
            <li>
              Currently, I'm building a new personal website with a React front-end and a Node/Express back-end, with a Continuous Integration approach and a plug-in architecture:
              <ul>
                <li><a href="https://gen3.skylerdong.com/" target="_blank" rel=”noreferrer”>New website.</a>
                </li>
                <li><a href="https://api.skylerdong.com/" target="_blank" rel=”noreferrer”>New API back-end.</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div>
          <p>I believe art and technology work hand in hand. Check out my <a href="<?php echo PATH; ?>/photography">photography gallery</a>.</p>
        </div>
      </div>
      <!--column-->
    </div>
    <!--row-->
  </div>
  <!--maincontent-->
  <?php include_once '../common/footer.php'; ?>
</body>

</html>
