<?php
  define("HEADER_TYPE",'blogpost');
  define("NAVBAR_COLOR",'light');
  define("BG_IMG_MD",'medium/SD__A7T3305_Web.jpg');
  define("BG_IMG_LG",'large/SD__A7T3305_Web_LG.jpg');
  define("SITE_TITLE",'Why I Use SCSS as My Preferred CSS Preprocessor');
  define("SITE_SUBTITLE",'With HTML, CSS, JavaScript, PHP and MySQL');
  define("SITE_SUBSUBTITLE",'<p>Posted on April 16, 2020</p>');
?>
<!doctype html>
<?php
  include_once '../common/config.php';
  include_once '../common/htmlTag.php';
?>
<head>
  <?php include_once '../common/head.php'; ?>
  <title>Why I Use SCSS as My Preferred CSS Preprocessor | Coding - Skyler Dong</title>
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
          <li><a href="#downside-css">Downside of CSS</a></li>
          <li><a href="#scss-over-sass">Why I prefer SCSS over SASS</a></li>
          <li><a href="#final-words">Final words</a></li>
        </ul>
      </div><!--TOC CONTAINER-->
      
      <div class="mb-5"><h2 id="key-points" class="anchor">Key points</h2>
        <ul>
          <li><p><a href="https://sass-lang.com/" target="_blank">SCSS</a> is my choice for preprocessing CSS.</p></li>
          <li><p>Directly writing CSS can be unorganized and tedious to update.</p></li>
          <li><p>SCSS takes advantages of variables, mixins and nestings to drastically simplify coding CSS rules.</p></li>
          <li><p>Every CSS is also valid SCSS syntax. However, CSS cannot be directly included into SASS, but possible with extra steps.</p></li>
        </ul>
      </div><!--KEY POINTS-->
      
      <div class="mb-5"><h2 id="downside-css" class="anchor">Downside of CSS</h2>
        <p>Hardcoding media query breakpoints throughout my CSS is a nightmare. Breakpoints change over time. Although replacing them can be accomplished by "find and replace," it is not an ideal solution.</p>
        <p>Hardcoding font families and colors is another nightmare.</p>
        <p>Writing plain CSS can be unnecessarily repetitive and tedious because plain CSS does not have a good nesting support.</p>
        <p>Hence, CSS preprocessors came to the rescue, such as <a href="https://sass-lang.com/" target="_blank">SCSS</a>, <a href="https://sass-lang.com/" target="_blank">SASS</a> and <a href="http://lesscss.org" target="_blank">LESS</a>.</p>
        <p>Consider the following example of CSS and SCSS:</p>
        <div class="row"><div class="col-12 col-md-6">
        <pre><code class="language-css">// CSS
          
body .main-content {
  color: #000000;
}          
        
body .main-content .article-title {
  font-size: 2rem;
  margin: 0.5rem 0;
}

body .main-content .article-title a {
  color: #000000;
}

body .main-content .article-title a:focus, 
body .main-content .article-title a:hover {
  color: #0000EE;
  text-decoration: none;
}

body .main-content .body-text {
  font-size: 1rem;
}</code></pre></div>
<div class="col-12 col-md-6"><pre><code class="language-css">// SCSS
  
$color-primary: #000000;
$color-blue: #0000EE;

body {
  .main-content {
    color: $color-primary;

    .article-title {
      font-size: 2rem;
      margin: 0.5rem 0;

      a {
        color: $color-primary;

        &:focus, 
        &:hover {
          color: $color-blue;
          text-decoration: none;
        }
      }

    .body-text {
      font-size: 1rem;
    }
  }
}</code></pre>
</div><!--col-->
</div><!--row-->
        <p>In the CSS, the code repeats <code class="language-css">body .main-content</code> 6 times and <code class="language-css">.article-title</code> 4 times, while its SCSS counterpart requires only one instance for each.</p>
        <p>You can easily declare variables in SCSS. For example, you can set font colors and font families as variables. When you want to change them in SCSS, all you need to do is to change the values of the variables. In CSS, you have to change the color for every incidence.</p>
        <p>Although SCSS is 3 lines longer than its CSS counterpart in the example above, SCSS actually contains fewer words and is much more readable than CSS.</p>
        <p>This is a work in progress. I will show an example of media queries with breakpoints as variables.</p>
      </div><!--downside-css-->

      <div class="mb-5"><h2 id="scss-over-sass" class="anchor">Why I prefer SCSS over SASS</h2>
        <p>I prefer SCSS over SASS, although SASS is more concise.</p>
        <p>Let me rewrite the previous example in SCSS and SASS for a comparison.</p>
        <div class="row">
          <div class="col-12 col-md-6">
<pre><code class="language-css">// SCSS
          
$color-primary: #000000;
$color-blue: #0000EE;

body {
  .main-content {
    color: $color-primary;

    .article-title {
      font-size: 2rem;
      margin: 0.5rem 0;

      a {
        color: $color-primary;

        &:focus, 
        &:hover {
          color: $color-blue;
          text-decoration: none;
        }
      }

    .body-text {
      font-size: 1rem;
    }
  }
</code></pre></div><!--col-->
          <div class="col-12 col-md-6"><pre><code class="language-css">// SASS
  
$color-primary: #000000
$color-blue: #0000EE

body
  .main-content
    color: $color-primary

    .article-title
      font-size: 2rem
      margin: 0.5rem 0

      a
        color: $color-primary

        &:focus, 
        &:hover
          color: $color-blue
          text-decoration: none

    .body-text
      font-size: 1rem</code></pre>
          </div>
        </div><!--row-->
      <p>Although SASS is more concise and shorter, I prefer SCSS.</p>
      <p>Here's why. Because SCSS has curly brackets and semicolons, every piece of CSS is valid SCSS, meaning that I can directly insert CSS codes into SCSS. However, inserting CSS into SASS is possible, but requires extra steps.</p>
      <p>When I migrated my CSS into SCSS, I had over a thousand lines of CSS. Because CSS is valid SCSS syntax, some of my legacy CSS can co-exist peacefully with my SCSS before I fully re-organized and re-grouped all my CSS into SCSS. This is very convenient.</p>
      <p>This also means I can insert CSS code snippets from other projects and templates into my SCSS code without extra steps of conversion.</p>
    </div><!--scss-over-sass-->
    
    <div class="mb-5"><h2 id="final-words" class="anchor">Final words</h2>
    <p>SCSS over SASS (and other CSS preprocessors) is a personal preference, but I strongly recommend using a CSS preprocessor. It will substantially increase your productivity and your code's maintainability.</p>
    <p>I hope you find this article helpful. You can find the source code on <a href="https://github.com/dongskyler/personal_website" target="_blank">GitHub</a>. I periodically update this article and the source code. Please check back. Thank you for reading. <i class="fas fa-ankh"></i></p>
    </div><!--sfinal-words-->
    </div><!--COL-->  
  </div><!--ROW-->
</div><!--MAINCONTENT-->
<?php include_once '../common/footer.php'; ?>
</body>
</html>
