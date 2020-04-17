<?php
define("HEADER_TYPE", 'blogpost');
define("NAVBAR_COLOR", 'light');
define("BG_IMG_MD", 'medium/SD__A7T3305_Web.jpg');
define("BG_IMG_LG", 'large/SD__A7T3305_Web_LG.jpg');
define("SITE_TITLE", 'Helpful Resources for Web Development');
define("SITE_SUBTITLE", 'Resources that I found helpful and worth sharing');
define("SITE_SUBSUBTITLE", '<p>Updated on April 16, 2020</p><p>Posted on March 27, 2020</p>');
?>
<!doctype html>
<?php
include_once '../common/config.php';
include_once '../common/htmlTag.php';
?>

<head>
  <?php include_once '../common/head.php'; ?>
  <title>Helpful Resources for Web Development | Coding - Skyler Dong</title>
</head>

<body>
  <?php
  include_once '../common/navbar.php';
  include_once '../common/header.php';
  ?>
  <!-- Main Content -->
  <div class="container maincontent">
    <div class="row">
    <div class="footnote col-10 mx-auto mb-3">(This is a work in progress...)</div>
      <div class="filter-button-bar col-12 mx-auto col-md-10">
        <button type="button" class="filter-button btn btn-outline-primary active" data-class="all">All</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="general">General</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="css">CSS</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="html">HTML</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="javascript">JavaScript</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="mysql">MySQL</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="php">PHP</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="python">Python</button>
        <button type="button" class="filter-button btn btn-outline-primary" data-class="ruby-on-rails">Ruby&nbsp;on&nbsp;Rails</button>
        <button type="button" class="filter-button btn btn-outline-success" data-class="book">Book</button>
        <button type="button" class="filter-button btn btn-outline-success" data-class="online-course">Online&nbsp;Course</button>
        <button type="button" class="filter-button btn btn-outline-success" data-class="website">Website</button>
        <hr />
      </div>
      <!--FILTER BUTTON-->
      <div class="col-12 mx-auto col-md-10">
        <div class="content-block filterE" data-class="general book">
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="general">General</button>
          <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="book">Book</button>
          <a href="#" target="_blank">
            <h3 class="content-block-title">Cracking the Coding Interview by Gayle Laakmann</h3>
            <h4 class="content-block-subtitle">A helpful book on how to prepare for interviews and a broad range of basic coding skills</h4>
          </a>
          <hr />
        </div>
        <!--div.content-block-->
        <div class="content-block filterE" data-class="general book">
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="general">General</button>
          <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="book">Book</button>
          <a href="#" target="_blank">
            <h3 class="content-block-title">Soft Skills: The software developer's life manual</h3>
            <h4 class="content-block-subtitle"></h4>
          </a>
          <hr />
        </div>
        <!--div.content-block-->
        <div class="content-block filterE" data-class="css html javascript online-course">
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="css">CSS</button>
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="html">HTML</button>
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="javascript">JavaScript</button>
          <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="online-cource">Online&nbsp;Course</button>
          <a href="https://www.coursera.org/learn/html-css-javascript-for-web-developers" target="_blank">
            <h3 class="content-block-title">Coursera: HTML, CSS, and Javascript for Web Developers</h3>
            <h4 class="content-block-subtitle"></h4>
          </a>
          <hr />
        </div>
        <!--div.content-block-->
        <div class="content-block filterE" data-class="javascript mysql php book">
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="javascript">JavaScript</button>
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="mysql">MySQL</button>
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="php">PHP</button>
          <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="book">Book</button>
          <a href="#" target="_blank">
            <h3 class="content-block-title">Learning PHP, MySQL & JavaScript by Robin Nixon</h3>
            <h4 class="content-block-subtitle"></h4>
          </a>
          <hr />
        </div>
        <!--div.content-block-->
        <div class="content-block filterE" data-class="javascript book">
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="javascript">JavaScript</button>
          <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="book">Book</button>
          <a href="#" target="_blank">
            <h3 class="content-block-title">JavaScript: The Definitive Guide by David Flanagan</h3>
            <h4 class="content-block-subtitle">A detailed book on JavaScript, although it's a littl old</h4>
          </a>
          <hr />
        </div>
        <!--div.content-block-->
        <div class="content-block filterE" data-class="ruby-on-rails website">
          <button type="button" class="filter-button btn btn-outline-primary btn-sm" data-class="ruby-on-rails">Ruby&nbsp;on&nbsp;Rails</button>
          <button type="button" class="filter-button btn btn-outline-success btn-sm" data-class="website">Website</button>
          <a href="https://gorails.com/" target="_blank">
            <h3 class="content-block-title">Go Rails</h3>
            <h4 class="content-block-subtitle"></h4>
          </a>
          <hr />
        </div>
        <!--div.content-block-->
        <p>This is a working in progress. I'm periodically updating it. <i class="fas fa-ankh"></i></p>
      </div>
      <!--div.col-->
    </div>
    <!--div.row-->
  </div>
  <!--div.maincontent-->
  <?php include_once '../common/footer.php'; ?>
</body>
</html>
