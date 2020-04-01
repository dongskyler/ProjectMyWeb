<?php
  define("HEADER_TYPE",'blogpost');
  define("BG_IMG_MD",'medium/SD__A7T3305_Web.jpg');
  define("BG_IMG_LG",'large/SD__A7T3305_Web_LG.jpg');
  define("SITE_TITLE",'Helpful Resources');
  define("SITE_SUBTITLE",'Resources that I found helpful and worth sharing');
  define("SITE_SUBSUBTITLE",'Posted on March 27, 2020');
?>
<!doctype html>
<?php
  include_once '../common/config.php';
  include_once '../common/htmlTag.php';
?>
<head>
  <?php include_once '../common/head.php'; ?>
  <title><h1>Helpful Resources | Coding - Skyler Dong</h1></title>
</head>
<body>
<?php
  include_once '../common/navbar.php'; 
  include_once '../common/header.php';
?>
<!-- Main Content -->
<div class="container maincontent">
    <div class="row">
      <div class="col-12 mb-3 col-md-10">
        <p>I'm no expert, but it might be even better. I'm sharing resources that I found helpful from an aspring web developer's perspective. I hope you'll find them helpful, too.</p>
        <hr/>
        <div class="mb-3"><h2>Books</h2>
          <ul>
            <li><p>Cracking the Coding Interview by Gayle Laakmann</p></li>
            <li><p>Learning PHP, MySQL & JavaScript by Robin Nixon</p></li>
            <li><p>JavaScript: The Definitive Guide by David Flanagan</p></li>
            <li><p>Soft Skills: The software developer's life manual</p></li>
          </ul>
        </div>
        <hr/>
        <div class="mb-3"><h2>Online Courses</h2>
          <ul>
            <li><p><a href="https://www.coursera.org/learn/html-css-javascript-for-web-developers" target="_blank">Coursera: HTML, CSS, and Javascript for Web Developers</a></p></li>
          </ul>
        </div>
      </div>
  </div><!--row-->
</div><!--maincontent-->
<?php include_once '../common/footer.php'; ?>
</body>
</html>
