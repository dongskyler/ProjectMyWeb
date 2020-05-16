<?php
  define("HEADER_TYPE",'blogpost');
  define("NAVBAR_COLOR",'light');
  define("BG_IMG_MD",'medium/SD__A7T3305_Web.jpg');
  define("BG_IMG_LG",'large/SD__A7T3305_Web_LG.jpg');
  define("SITE_TITLE",'CSS-Animated Hamburger Menu Icon');
  define("SITE_SUBTITLE",'With HTML, CSS and JavaScript (JQuery) code snippets');
  define("SITE_SUBSUBTITLE",'<p>Posted on April 17, 2020</p>');
?>
<!doctype html>
<?php
  include_once '../common/config.php';
  include_once '../common/htmlTag.php';
?>
<head>
  <?php include_once '../common/head.php'; ?>
  <title>CSS-Animated Hamburger Menu Icon | Blog - Skyler Dong</title>
  <meta name="keywords" content="web development,developer,software,SCSS,SASS,CSS,HTML">
</head>
<body>
<?php
  include_once '../common/navbar.php'; 
  include_once '../common/header.php';
?>
<div class="container maincontent">
  <div class="row">
    <div class="col-12 mx-auto col-md-10">
      <div class="toc_container mb-5">
        <p class="toc_title">Contents</p>
        <ul class="toc_list">
          <li><a href="#key-points">Key points</a></li>
          <li><a href="#html-css">HTML and CSS</a></li>
          <li><a href="#javascript">JavaScript (JQuery)</a></li>
          <li><a href="#final-words">Final words</a></li>
        </ul>
      </div><!--TOC CONTAINER-->
      
      <div class="mb-5"><h2 id="key-points" class="anchor">Key points</h2>
        <ul>
          <li><p>I made an animated hamburger menu icon with HTML, CSS and JavaScript (JQuery)</p></li>
        </ul>
      </div><!--KEY POINTS-->
      
      <div class="mb-5"><h2 id="html-css" class="anchor">HTML and CSS</h2>
      <p>Hamburger is a nickname for the toggle button that is made of three horizontal lines, resembling two buns and a patty.</p>
      <p>First, let me show you the final product. The following navigation bar is the one I use on this website with hyperlinks removed.</p>
      <p>Click on the hamburger menu icon &#x1F354; below and see the animation.</p>
      <div class="col-12 mx-auto col-sm-10 col-md-8 col-lg-6 mb-3">
        <nav class="navbar sticky-top navbar-expand* navbar-light bg-light">
          <a class="navbar-brand" href="#html-css">Skyler Dong</a>
          <div class="ml-auto">
            <span>Click &#x1F354;&rarr;</span>
          </div>
  <button id="nav-icon-demo" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-demo" aria-controls="navbarSupportedContent-demo" aria-expanded="false" aria-label="Toggle navigation">
    <span></span>
    <span></span>
    <span></span>
  </button>
  <div class="collapse navbar-collapse fade-in-fast" id="navbarSupportedContent-demo">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#html-css">App</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#html-css">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#html-css">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#html-css">Photography</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#html-css">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#html-css"><i class="fas fa-search"></i></a>
      </li>
    </ul>
  </div>
</nav>
      </div>
        <p>My hamburger has three lines. When toggled, the middle line rotates 45 degrees, and the other two lines translate, rotate and eventually overlap, forming a cross.</p>
        <p>I use Boostrap framework, but you can apply this icon to any other frameworks. My animated CSS hamburger menu icon uses 3 span elements inside the Bootstrap's <code class="language-html">button.navbar-toggler</code>. I gave it an id selector <code class="language-html">id="nav-icon-demo"</code> for future reference.</p>
        <pre><code class="language-html">&lt;button id="nav-icon-demo" class="navbar-toggler" 
          type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent-demo" 
          aria-controls="navbarSupportedContent-demo" 
          aria-expanded="false" 
          aria-label="Toggle navigation"&gt;
  &lt;span&gt;&lt;/span&gt;
  &lt;span&gt;&lt;/span&gt;
  &lt;span&gt;&lt;/span&gt;
&lt;/button&gt;</code></pre>
  <p>The following CSS code is written in SCSS. Read about <a href="<?php echo PATH; ?>/blog/why-i-use-scss.php">why SCSS is my favorite CSS preprocessor</a>. For clarity, I removed vendor prefixes for transforms and transitions. You can generate them using a CSS post-processor such as <a href="https://autoprefixer.github.io" target="_blank">Autoprefixer</a>.</p>
  <pre><code class="language-css">#nav-icon-demo {
  width: 30px;
  height: 23px;
  position: relative;
  margin: 6px 3px;
  cursor: pointer;
  background-color: #F8F9FA;
  transform: rotate(0deg);
  transition: 0.5s ease-in-out;

  span {
    display: block;
    position: absolute;
    height: 3px;
    width: 100%;
    border-radius: 9px;
    background-color: #212529;
    opacity: 1;
    left: 0;
    transform: rotate(0deg);
    transition: 0.5s ease-in-out;

    &:nth-child(1) {top: 0px;}

    &:nth-child(2) {top: 10px;}

    &:nth-child(3) {top: 20px;}
  }

  &.open span {
    &:nth-child(1) {
      transform: translateY(10px) rotate(135deg);
    }

    &:nth-child(2) {
      transform: rotate(45deg);
    }

    &:nth-child(3) {
      transform: translateY(-10px) rotate(135deg);
    }
  }
}</code></pre>
      </div><!--html-css-->

      <div class="mb-5"><h2 id="javascript" class="anchor">JavaScript (JQuery)</h2>
        <p>We need to modify our JavaScript code to make the toggling work. Fortunately, it's quite simple. I use JQuery to make my life even easier.</p>
          <pre><code class="language-javascript">$(function () {
  $('#nav-icon-demo').click(function () {
    $(this).toggleClass('open');
  });
});</code></pre>
    </div><!--javascript-->
    
    <div class="mb-5"><h2 id="final-words" class="anchor">Final words</h2>
    <p>Although many people have designed similar hamburger animations, I hope you like my design.</p>
    <p>I hope you find this article helpful. You can find the source code on <a href="https://github.com/dongskyler/skylerdong.com-gen2" target="_blank">GitHub</a>. I periodically update this article and the source code. Please check back. Thank you for reading. <i class="fas fa-ankh"></i></p>
    </div><!--final-words-->
    </div><!--COL-->  
  </div><!--ROW-->
</div><!--MAINCONTENT-->
<?php include_once '../common/footer.php'; ?>
</body>
</html>
