<?php
  define("HEADER_TYPE",'blogpost');
  define("NAVBAR_COLOR",'light');
  define("BG_IMG_MD",'medium/SD__A7T3305_Web.jpg');
  define("BG_IMG_LG",'large/SD__A7T3305_Web_LG.jpg');
  define("SITE_TITLE",'Interactive Filtering Buttons and Updating URL Parameters using JavaScript');
  define("SITE_SUBTITLE",'Apply filter and update URL parameters when a filter button is clicked');
  define("SITE_SUBSUBTITLE",'<p>Posted on April 13, 2020</p>');
?>
<!doctype html>
<?php
  include_once '../common/config.php';
  include_once '../common/htmlTag.php';
?>
<head>
  <?php include_once '../common/head.php'; ?>
  <title>Interactive Filtering Buttons and Updating URL Parameters using JavaScript | Blog - Skyler Dong</title>
  <meta name="keywords" content="web development,developer,software,HTML,CSS,JavaScript,PHP,MySQL">
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
          <li><a href="#filter-button">Filtering content when a filter button is clicked</a></li>
          <li><a href="#filter-upon-loading">Applying filter upon page loading</a></li>
          <li><a href="#update-url">Updating URL parameters using JavaScript</a></li>
          <li><a href="#styling-filter">Responsive design of filter buttons with SCSS</a></li>
          <li><a href="#final-words">Final words</a></li>
        </ul>
      </div><!--TOC CONTAINER-->
      
      <div class="mb-5"><h2 id="key-points" class="anchor">Key points</h2>
        <ul>
          <li><p>I use JavaScript to create an interactive photo filtering system throughout my website, such as my <a href="<?php echo PATH; ?>/photography/">photography gallery</a>, <a href="<?php echo PATH; ?>/blog/">blogs</a> and <a href="<?php echo PATH; ?>/app">web apps</a>.</p></li>
          <li><p>URL parameters are dynamically appended to the URL when a filter button is selected.</p></li>
        </ul>
      </div><!--KEY POINTS-->

    <div class="mb-5"><h2 id="filter-button" class="anchor">Filtering content when a filter button is clicked</h2>
      <p>I use JavaScript to create an interactive photo filtering system on <a href="../photography/">my photography page</a>. For example, when you click on "landscape" button, only the photos in the landscape category will be shown. It is worthy to to mention that many photos are in multiple categories and my filtering system supports filtering photos that are in several categories.</p>
      <pre><code class="language-javascript">const filterCat = document.querySelectorAll('.maincontent .filter-button');
// Get all category filter buttons from HTML
// In my case, they are under .maincontent .filter-button

const filterE = document.querySelectorAll('.maincontent .filterE');
// Get all elements to be filtered from HTML
// In my case, they are under .maincontent .filterE

filterCat.forEach(cat => {
  cat.addEventListener('click', () => {
  // Trigger this function if the user clicks on category buttons
        
    toggleFilterCat(cat);
    // Call toggleFilterCat to change "active" states of category buttons

    toggleFilterE(cat.dataset.class);
    // Call toggleFilterE to display or hide elements depending on their categories
  });
}

function toggleFilterCat(activeCat) {
  filterCat.forEach(cat => {
  // Loop through all category buttons

    if (activeCat.dataset.class === cat.dataset.class)
      cat.classList.add('active');
      // Add "active" state of buttons
    
    else
      cat.classList.remove('active');
    // Remove "active" state of buttons
  })
}

function toggleFilterE(dataClass) {
  if (dataClass === 'all'){
  // All elements are displayed if category "all" is chosen
    
    filterE.forEach(e => {
      e.style.display = 'block';
    })
    // Loop through all elements and display all elements
  }
    
  else{
  // Filter images if any category other than "all" is chosen

    filterE.forEach(e => {
    // Loop through all elements

      if (e.dataset.class.includes(dataClass))
        e.style.display = 'block';
        // Display the photo if it is in the chosen category
          
      else
        e.style.display = 'none';
        // Hide the photo if it is not in the chosen category
    }
  }
}</code></pre>
    </div><!--filter-button-->

    <div class="mb-5"><h2 id="filter-upon-loading" class="anchor">Applying filter upon page loading</h2>
      <p>If an category URL parameter is present when the user initially visit the webpage, we need to parse the URL parameters with PHP and activate the filter upon page loading:</p>
        <pre><code class="language-javascript">const queryURLString = window.location.search;
// Get URL strings from the URL
// For example, if the URL is:
// <?php echo PATH; ?>/photography/?category=landscape
// queryURLString = '?category=landscape'

const urlParams = new URLSearchParams(queryURLString);
// Create an object called urlParams using constructor URLSearchParams
// More on URLSearchParams:
// https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams

const category = urlParams.get('category');
// Get the string after "category" variable name
// Continue with the example above. Here, category = 'landscape'
// It is coincidental that the "category" in urlParams.get('category')
// is the same as variable name category = 'landscape'
// You can use other variable names, such as 
// const photo_category = urlParams.get('category');

if (category != null) {
// If the "category" parameter isn't null,
// i.e., when a URL parameter is specified

  filterCat.forEach(cat => {
  // Loop through all categories

    if (cat.dataset.class === category_url)
      toggleFilterCat(cat);
      // Call toggleFilterCat to make the chosen category button(s) "active"
  }
  toggleFilterE(category_url);
  // Call toggleFilterE to display the or hide elements depending on the chosen category
}</code></pre>
  </div>

    <div class="mb-5"><h2 id="update-url" class="anchor">Updating URL parameters using JavaScript</h2>
      <p>When a category is chosen, we will append URL parameters to the URL. This will be convinient and useful, when a user wants to share the link of the photography portfolio with a chosen category filter. We can add 4 lines of code into the for-each loop:</p>
      <pre><code class="language-javascript">filterCat.forEach(cat => {
  cat.addEventListener('click', () => {
    toggleFilterCat(cat);
    toggleFilterE(cat.dataset.class);
    // The codes above are the same from the previous example

    // New code:

    let param = ("?category=").concat(cat.dataset.class);
    // Construct the URL parameter

    if (cat.dataset.class === 'all')
      param = window.location.pathname;
      // If category "all" is chosen, just remove the URL parameter and return the page URL

    window.history.replaceState(null, null, param);
    // Update URL with URL parameters
  });
}</code></pre>
    </div><!--update-url-->

    <div class="mb-5"><h2 id="styling-filter" class="anchor">Responsive design of filter buttons with SCSS</h2>
      <p>I use <a href="<?php echo PATH; ?>/blog/why-i-use-scss.php">SCSS as my preferred CSS preprocessor</a>. I applied a round edge to the filter button to achieve a modern look. I use media queries to display slightly different font sizes on different screens.</p>
      <pre><code class="language-css">.maincontent .btn {
	border-radius: 18px;
}
        
.maincontent .filter-button-bar .btn {
  font-size: 0.95rem;
  margin-bottom: 0.25rem;

  @media screen 
    and (min-width: $breakpoint-sm) 
    and (min-height: $breakpoint-sm * 0.67) {
    font-size: 1rem;
  }

  @media screen 
    and (min-width: $breakpoint-lg) 
    and (min-height: $breakpoint-lg * 0.5) {
    font-size: 1.25rem;
  }
}</code></pre>
    </div>

    <div class="mb-5"><h2 id="final-words" class="anchor">Final words</h2>
      <p>I hope you find this article helpful. You can find the source code on <a href="https://github.com/dongskyler/skylerdong.com-gen2" target="_blank">GitHub</a>. I periodically update this article and the source code. Please check back. Thank you for reading. <i class="fas fa-ankh"></i></p>
    </div>
    </div><!--COL-->  
  </div><!--ROW-->
</div><!--MAINCONTENT-->
<?php include_once '../common/footer.php'; ?>
</body>
</html>
