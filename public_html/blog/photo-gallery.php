<?php
  include_once '../common/config.php';
  define("HEADER_TYPE",'blogpost');
  define("NAVBAR_COLOR",'light');
  define("BG_IMG_MD",'medium/SD__A7T3305_Web.jpg');
  define("BG_IMG_LG",'large/SD__A7T3305_Web_LG.jpg');
  define("SITE_TITLE",'How I&apos;m Building This Website');
  define("SITE_SUBTITLE",'With HTML, CSS, JavaScript, PHP and MySQL');
  define("SITE_SUBSUBTITLE",'<p>Updated on April 13, 2020</p><p>Posted on March 23, 2020</p>');
?>
<!doctype html>
<?php
  include_once '../common/htmlTag.php';
?>
<head>
  <?php include_once '../common/head.php'; ?>
  <title>Coding This Website | Blog - Skyler Dong</title>
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
          <li><a href="#front-end">Front-end CSS and JavaScript</a></li>
          <li><a href="#photo-portfolio">Photography porfolio</a>
            <ul>
              <li><a href="#photo-mysql-database">Storing photo attributes using MySQL database</a></li>
              <li><a href="#photo-php-dynamic-html">Dynamically generating HTML using PHP</a></li>
              <li><a href="#photo-php-query-mysql">Querying photo attributes from MySQL database using PHP</a></li>
              <li><a href="#photo-filtering-javascript">Photo filtering by criteria and updating URL parameters using JavaScript</a></li>
              <li><a href="#photo-multi-column-layout">Responsive multi-column layout with CSS media queries</a></li>
              <li><a href="#photo-modal">Photo modal with captions and updating URL parameters using JavaScript and JQuery library</a></li>
              <li><a href="#photo-dynamic-og-tag">Dynamically generating Open Graph meta tags using PHP and JavaScript</a></li>
              <li><a href="#photo-content-jumping">Reducing content jumping with CSS padding-bottom trick</a></li>
              <li><a href="#photo-lazy-loading">3-stage lazy loading images using JavaScript</a></li>
            </ul></li>
            <li><a href="#server-config">Configuring .htaccess on Apache servers</a></li>
        </ul>
      </div><!--TOC CONTAINER-->
      
      <div class="mb-5"><h2 id="key-points" class="anchor">Key points</h2>
        <ul>
          <li><p>I have been building my website using HTML, CSS, JavaScript (including JQuery), PHP and MySQL, with version control powered by <a href="https://github.com/dongskyler" target="_blank">GitHub</a>.</p></li>
          <li><p>For back-end, I use PHP to query data from MySQL database and dynamically generate contents in HTML.</p></li>
          <li><p>I use JavaScript and JQuery library to implement front-end features, such as filtering photos by category, parsing and updating URL parameters and lazy loading images.</p></li>
          <li><p>For styling, I adopted <a href="https://getbootstrap.com" target="_blank">Bootstrap</a> framework and write additional customized CSS with Sass and JavaScript to achieve a mobile-first, responsive and interactive design that is functional and sleek on all kinds of devices.</p></li>
        </ul>
      </div><!--KEY POINTS-->
      
      <div class="mb-5"><h2 id="front-end" class="anchor">Front-end CSS and JavaScript</h2>
        <ul>
          <li><p>I'm using <a href="https://getbootstrap.com" target="_blank">Bootstrap</a> framework as my basic CSS and JavaScript foundation. <a href="https://getbootstrap.com" target="_blank">Bootstrap</a> is argubly the most popular CSS framework. It was originally developed and made public by Twitter developers. It emphasizes on a mobile-first, responsive front-end design, as <a href="https://www.broadbandsearch.net/blog/mobile-desktop-internet-usage-statistics" target="_blank">more and more people use mobile devices to browse the internet</a>. The strategy is to design your website to fit on a small screen first and then work your way up to larger screens. It encourages a "less is more" philosophy. It is always a good idea to avoid clusters and too much information.</p></li>
          <li><p>I'm writing customized CSS using <a href="https://sass-lang.com/" target="_blank">Sass</a> to deploy variable-based and easy-to-maintain CSS.</p></li>
          <li><p>Syntax highlighting of code snippets is powered by <a href="https://prismjs.com/index.html" target="_blank">Prism</a>, which is a lightweight syntax highlighter written in JavaScript and CSS. It supports many languages.</p></li>
        </ul>
    </div><!--CSS AND JAVASCRIPT-->

    <div class="mb-5"><h2 id="photo-portfolio" class="anchor">Photography portfolio</h2>
      <div class="mb-5"><h3 id="photo-mysql-database" class="anchor">Storing photo attributes using MySQL database</h3>
        <p>I'm using MySQL as my back-end database. For example, the titles of photos are stored in my MySQL database and PHP queries my MySQL database and dynamically generate contents in HTML, as you can see on <a href="../photography/">my photography page</a>.</p>
        <p>To maintain its integrity and improve its efficiency of my database and to practice my database skills, I designed and normalized my database to its third normal form, which is argubly its highest form. The database contains filenames, dates captured, dates uploaded, categories, locations, people in photos (if applicable) and unique IDs as its primary key. </p>
        <p>The database is consist of 8 tables. </p>
        <div class="col-12 mb-3 mx-auto text-center"><img src="../images/coding/database_schema_photo_collection.svg" width=100% height=auto /><p>Schema diagram of my photo portfolio MySQL database. The "1 - *" indicates a one-to-many relationship.</p></div>
        <p>Let me demonstrate how to create such as database. After figuring out the database schema, we can use MySQL to create the database and tables. When we create tables, we need to tell MySQL what the columns are called and what data types they are. Let me show you how to create the database and a few selected tables as a demonstration.</p>
        <pre><code class="language-sql">CREATE DATABASE photo_collection;
USE photo_collection;

CREATE TABLE photos
(
  id  INT unsigned NOT NULL AUTO_INCREMENT, # Unique ID for each photo
  filename  VARCHAR(140) NOT NULL, # File names of photos
  date_captured  DATE NOT NULL, # Date captured of photos
  date_uploaded  DATE NOT NULL, # Date uploaded of photos
  title  VARCHAR(140) NOT NULL, # Titles of photos
  place_id  INT unsigned NOT NULL, # Places where photos were captured
  caption  VARCHAR(1120), # Photo captions
  PRIMARY KEY (id), # Make id the primary key
  FOREIGN KEY (place_id) REFERENCES places (place_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE categories
(
  category_id INT unsigned NOT NULL AUTO_INCREMENT,
  name VARCHAR(24) NOT NULL,
  PRIMARY KEY (category_id)
);

CREATE TABLE photos_in_categories
(
  id  INT unsigned NOT NULL,
  category_id  INT unsigned NOT NULL,
  FOREIGN KEY (id) REFERENCES photos (id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (category_id) REFERENCES categories (category_id) ON DELETE RESTRICT ON UPDATE CASCADE,
  PRIMARY KEY (id, category_id)
);</code></pre>

<p>Now we're done creating tables in the database. Let's ask MySQL to show all 8 tables built:</p>
<pre><code class="language-sql">mysql> SHOW TABLES;
+----------------------------+
| Tables_in_photo_collection |
+----------------------------+
| categories                 |
| countries                  |
| people                     |
| people_in_photos           |
| photos                     |
| photos_in_categories       |
| places                     |
| states                     |
+----------------------------+
8 rows in set (0.00 sec)</code></pre>

<p>Now let's enter data into the database. For short tables, we can enter data through commands. For longer tables, we can import text files. For example, I categorized my photos into 9 genres. Many photos belong to multiple categories. I assinged each catergory a caterory_id, because I might change the wording of categories in the future. This has happened several times when I categorized my photos. The "landscape" category was called "outdoor," "nature," and eventually settled on "landscape."</p>
<p>Let's populate the "category" table as a demonstration:</p>
<pre><code class="language-sql">INSERT INTO categories (category_id, name) VALUES
('1', 'bnw'),
('2', 'landscape'),
('3', 'long_exposure'),
('4', 'night'),
('5', 'portrait'),
('6', 'street'),
('7', 'travel'),
('8', 'urban'),
('9', 'wildlife');</code></pre>
<p>For longer tables, such as the "photos" table, which contains 91 photos at the time, we can load a text file into the MySQL database:</p>
<pre><code class="language-sql"># IMPORT FILE
LOAD DATA LOCAL INFILE 'someDirectory/photos.txt' INTO TABLE photos LINES TERMINATED BY '\r\n';</code></pre>

<p>After importing data into the "photos" table, if everything is good, mysql would prompt confirmations:</p>
<pre><code class="language-sql">mysql>
Query OK, 91 rows affected (0.00 sec)
Records: 91  Deleted: 0  Skipped: 0  Warnings: 0</code>
</pre></div><!--MYSQL PHP PHOTO ATTRIBUTES-->
      
      <div class="mb-5"><h3 id="photo-php-dynamic-html" class="anchor">Dynamically generating HTML using PHP</h3>
        <p>I use PHP to dynamically generate HTML files. Reusable elements on multiple webpages, such as the navigation bar and the footer, are incorporated into HTML by PHP <code class="language-php">include</code> statements.</p>
        <p>On my <a href="../photography/">photography page</a>, it would be a tedious chore and&nbsp;&mdash;&nbsp;more importantly&nbsp;&mdash;&nbsp;a maintenance nightmare with poor scalability, if I hard-code HTML <code class="language-html">&lt;img&gt;</code> tags for every single photo, epecially, given that I have about 100 photos at the time of writing.
        </p>
        <p>Instead, I store all my photos in a folder and then I use PHP to dynamically generate HTML code. I use the <code class="language-php">glob()</code> function to find all photos in JPEG in the folder using a regular expression <code class="language-php">&#42;.jpg</code> and generate HTML code for each photo with a for-each loop.</p>
        <pre><code class="language-php">&lt;?php
  chdir('photoFolderPath');
  /* Change directory to the directory where photos are stored
  Why I change directory instead of using a direct path?
  Because I need to use filenames to query my MySQL databsse
  and they can't contain path information */

  $images = glob('*.jpg', GLOB_BRACE);
  // Get all filenames with jpg extensions and store them in an array called $images

  shuffle($images);
  /* Shuffle the order of filenames because I don't want the same photos
  with higher alphanumerically filename order taking the front-row seats
  on my webpage. And I don't have a preference of a particular order.
  I love all photos equally, so shuffle it is */

  foreach ($images as $image) {
  // Loop through all photos in $images

    list($width, $height) = getimagesize($image);
    // Get the native image dimensions

    $aspect = round($height / $width * 10000) / 100;
    // Calculate the aspect ratio of the photo rounded to 2 decimal places

    echo '&lt;div class="mb-2 responsive-container"
      style="padding-bottom:',$aspect,'%;">',
      '&lt;img class="img-fluid lozad" data-src="photoFolderPath/',$image,
      '"&gt;&lt;/div&gt;';
    // Echo HTML code that contains the aspect ratio
  }
?&gt;</code></pre>
      <p>The reason why I use <code class="language-html">data-src</code> instead of the regular <code class="language-html">src</code> is to lazy-load images using <a href="https://apoorv.pro/lozad.js/" target="_blank">Lozad.js</a>, described in <a href="#photo-lazy-loading">3-stage lazy loading images using JavaScript</a>.</p>
    </div><!--PHOTO IMPORT USING PHP-->

    <div class="mb-5"><h3 id="photo-php-query-mysql" class="anchor">Querying photo attributes from MySQL database using PHP</h3>
        <p>I use PHP to query photo attributes, such as title, caption, category and date of capture, from my <a href="#photo-mysql-database">MySQL database</a>.</p>
        <p>Let me show an exmaple of querying photo titles using the object-oriented interface and generating photos titles in <code class="language-html">&lt;p&gt;</code> HTML elements:</p>
        <pre><code class="language-php">&lt;?php
  echo '&lt;p class="photo-title"&gt;';
  
  $query_title = "SELECT title FROM photos WHERE filename = '$image'";
  // Query MySQL database

  $result_title = $conn-&gt;query($query_title);
  // Store the result

  if (!$result_title) die("Fatal Error");
  // If not result is returned, exit from the current PHP script

  $result_title-&gt;data_seek(0);
  // Since there's going to be only one row of data
  // Each photo has only one title
  // If there are multiple rows of data, you need to use a loop

  echo modifyQueryStr_title($result_title-&gt;fetch_assoc()['title']);
  $result_title-&gt;close();
  // Echo the title after passing through function modifyQueryStr_title,
  // which is shown below

  echo &apos;&lt;/p&gt;&apos;; // Echo the end of the p tag

  function modifyQueryStr_title($str) {
  /* Modify the string of title.
  In my actual code, this function is placed somewhere else
  for better readability and clarity */

    $str = ucfirst($str);
    // Capitalize the first letter

    $str = htmlspecialchars($str);
    // Replace special characters with HTML escape characters

    $str = str_replace(&apos; - &apos;, &apos; &amp;ndash; &apos;, $str);
    /* I&apos;m meticulous about hyphens, en dashes and em dashes.
    But for the simplicity of MySQL database, I uniformly used hyphens
    Here, replace space-hyphen-space with space-en-dash-space
    It looks better and is more typographically correct */

    $str = str_replace(&quot;\w&apos;\w&quot;, &apos;&amp;apos;&apos;, $str);
    /* Replace apostrophe with its HTML escape character, 
    in case apostrophes get in the way of PHP echo functions */

    return $str;
    // Return the modified string
  }
?&gt;</code></pre>
    </div><!--photo-php-query-mysql-->

    <div class="mb-5"><h3 id="photo-filtering-javascript" class="anchor">Photo filtering by criteria and updating URL parameters using JavaScript</h3>
      <p>I use JavaScript to create an interactive photo filtering system on <a href="../photography/">my photography page</a>. For example, when you click on "landscape" button, only the photos in the landscape category will be shown. It is worthy to to mention that many photos are in multiple categories and my filtering system supports filtering photos that are in several categories.</p>
      <p>When a category is chosen, we will append URL parameters to the URL. This will be convinient and useful, when a user wants to share the link of the photography portfolio with a chosen category filter.</p>
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

    let param = ("?category=").concat(cat.dataset.class);
    // Construct the URL parameter

    if (cat.dataset.class === 'all')
      param = window.location.pathname;
      // If category "all" is chosen, just remove the URL parameter and return the page URL

    window.history.replaceState(null, null, param);
    // Update URL with URL parameters
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
      <p>If an category URL parameter is present when the user initially visit the webpage, we can parse the URL and activate the filter:</p>
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
      <p>I'm currently working on filtering by other attributes, such as locations and capture dates.</p>
    </div><!--photo-filtering-javascript-->

    <div class="mb-5"><h3 id="photo-multi-column-layout" class="anchor">Responsive multi-column layout with CSS media queries</h3>
          <p>If I were to use the Bootstrap grid system, there would be a lot of white spaces in between photos because my photos have different aspect ratios. Therefore, I'm using a multi-column layout inside <code class="language-css">&lt;div class="gallery"&gt;...&lt;/div&gt;</code> ) to display photos, so all photos have the same width but various heights to maintain their native aspect ratios with my <code class="language-css">.img-fluid</code> class.</p>
          <p>I used CSS media queries with 2 breakpoints to ensure user experience on different devices with the following CSS code:</p>
<pre><code class="language-css">.gallery {
  column-count: 1;
  column-width: 100%;
  column-gap: 0.5rem;
}

@media screen and (min-width: 768px) {
  .gallery {
    column-count: 2;
    column-width: 50%;
  }
}

@media screen and (min-width: 992px) {
  .gallery {
    column-count: 3;
    column-width: 33%;
  }
}</code></pre></div><!--MULTI-COLUMN LAYOUT-->

    <div class="mb-5"><h3 id="photo-modal" class="anchor">Photo modal with captions and updating URL parameters using JavaScript and JQuery library</h3>
        <p>The implementation of modal is consist of two parts: HTML and JavaScript. In the HTML, I adopted the <a href="https://getbootstrap.com" target="_blank">Bootstrap</a> modal layout:</p>
        <pre><code class="language-html">&lt;div class=&quot;modal fade&quot; id=&quot;imagemodal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; 
          aria-labelledby=&quot;photoModal&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        &lt;img src=&quot;&quot; class=&quot;modal-img&quot;&gt;
        &lt;p class=&quot;modal-title text-center&quot;&gt;Dummy title to be replaced by JQuery&lt;/p&gt;
        &lt;p class=&quot;modal-location&quot;&gt;Dummy location to be replaced by JQuery&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
<p>To make the modal pop out when you click a photo, we need to wrap the photo &mdash; and the caption, in my case &mdash; with an <code class="language-html">&lt;a&gt;</code> tag. As described in <a href="#photo-php-dynamic-html">Dynamically generating HTML using PHP</a> and <a href="#photo-php-query-mysql">Querying photo attributes from MySQL database using PHP</a>, the following code snippet represents the barebone structure of a much longer PHP code section in my actual code. To desmonstrate the point of this section, I have simplied my actual code to HTML and removed non-essential contents to make the code more readable.</p>
<pre><code class="language-html">&lt;div class="gallery"&gt;
  &lt;div class="photo-block"&gt;
    &lt;a class="pop"&gt;
      &lt;div&gt;
        &lt;img data-src="photoFolderPath/imageName.jpg"/&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;p class="photo-title"&gt;Title of the photo&lt;/p&gt;
        &lt;p class="photo-location"&gt;Location of the photo.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
<p>As I have mentioned, the reason why I use <code class="language-html">data-src</code> instead of the regular <code class="language-html">src</code> is to lazy-load images using <a href="https://apoorv.pro/lozad.js/" target="_blank">Lozad.js</a>, described in <a href="#photo-lazy-loading">3-stage lazy loading images using JavaScript</a>.</p>
<p>Then we use JQuery to replace dummy titles and dummy locations with actual titles and locations:</p>
<pre><code class="language-javascript">$(function() {
// Only activate this function after the page is loaded
// It is a shorthand version of $(document).ready()


  $('.gallery .photo-block .pop').on('click', function() {
  // Trigger the function if a photo is clicked

    $('.modal-img').attr('src', $(this).find('img').attr('data-src'));
    // Replace the "src" in .modal-img (similar syntax to CSS selectors)
    // with "data-src" in the img element of the clicked object "this"

    $('p.modal-title').text($(this).find('p.photo-title').text());
    // Similarly, replace the text in p.modal-title
    // with the text in p.photo-title of the clicked object "this"

    $('p.modal-location').text($(this).find('p.photo-location').text());
    // Replace the text in p.modal-location
    // with the text in p.photo-location of the clicked object "this"

    $('#imagemodal').modal('show');
    // Show the modal of id="imagemodal"
    });
});</code></pre>
      <p>To be able to share a single photo with its unique link, I update URL parameters when the modal is open and remove them when the modal is closed. This is a similar approach discussed in <a href="#photo-filtering-javascript">Photo filtering by criteria and updating URL parameters using JavaScript</a>.</p>
      <pre><code class="language-javascript">// The FOLLOWING code is the same as the one in the previous code snippet.

$(function() {
// Only activate this function after the page is loaded
// It is a shorthand version of $(document).ready()  
      
  $('.gallery .photo-block .pop').on('click', function() {
    $('.modal-img').attr('src', $(this).find('img').attr('data-src'));
    $('p.modal-title').text($(this).find('p.photo-title').text());
    $('p.modal-location').text($(this).find('p.photo-location').text());
    $('#imagemodal').modal('show');

// The ABOVE code is the same as the one in the previous code snippet.

    // Let's add the following code to update URL parameters

    let param = ("?photo=").concat($(this).attr('id'))
    // Construct the string for updating URL parameters

    window.history.replaceState(null, null, param);
    // Update URL with URL parameters
    });
});</code></pre>
      <p>If a URL parameter is present when the page is loaded, it will open the modal containing the corresponding photo. To implement this feature, in the HTML code generated by PHP, I include the id number of each photo in the <a href="#photo-mysql-database">MySQL database</a> &mdash; which is unique to each photo &mdash; as an id selector, such as <code class="language-html">id = "photoid_7"</code>. The method is similar to the one described in <a href="#photo-php-query-mysql">Querying photo attributes from MySQL database using PHP</a>.</p>
      <p>In the following JavaScript code snippet, some parameters have been defined in <a href="#photo-filtering-javascript">Photo filtering by criteria and updating URL parameters using JavaScript</a>, but for the sake of clarity, I am going to include them here, too.</p>
      <pre><code class="language-javascript">// Get URL strings from the URL
// For example, if the URL is:
// <?php echo PATH; ?>/photography/?category=landscape
// queryURLString = '?photoid=photoid_7'

const urlParams = new URLSearchParams(queryURLString);
// Create an object called urlParams using constructor URLSearchParams
// More on URLSearchParams:
// https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams

const photoid = urlParams.get('photoid');
// Get the string after "photoid" variable name
// Continue with the example above. Here, photoid = 'photoid_7'
// It is coincidental that the "photoid" in urlParams.get('photoid')
// is the same as variable name photoid = '7'
// You can use other variable names, such as 
// const photo_id = urlParams.get('photoid');

if (category != null) {
// If the "category" parameter isn't null,
// i.e., when a URL parameter is specified

$(function() {
// Only activate this function after the page is loaded
// It is a shorthand version of $(document).ready() in JQuery

  if (photoid != null) {
  // Preceed only if a photoid URL parameter is given  

    let $photo = $("#" + photoid);
    // Define $photo as id selector with the parsed URL parameter photoid

    $('.modal-img').attr('src', $photo.find('img').attr('data-src'));
    // Replace the "src" in .modal-img (similar syntax to CSS selectors)
    // with "data-src" in the img element of $photo

    $('p.modal-title').text($photo.find('p.photo-title').text());
    // Similarly, replace the text in p.modal-title
    // with the text in p.photo-title of $photo

    $('p.modal-location').text($photo.find('p.photo-location').text());
    // Replace the text in p.modal-location
    // with the text in p.photo-location of $photo
  }
});</code></pre></div><!--photo-modal-->

      <div class="mb-5"><h3 id="photo-dynamic-og-tag" class="anchor">Dynamically generating Open Graph meta tags using PHP and JavaScript</h3>
        <p>Open Graph (OG) meta tags are codes that control how the URL will be shared on social media platforms. For example, when you share a URL on Facebook, Twitter or even Apple iMessage, Open Graph meta tags control what image will be loaded as part of your URL and what URL it will direct to when you click on it.</p>
        <p>We need to dynamically generate and update Open Graph meta tags, in order to load the image specified by the query parameters, instead of the default image specified in a static HTML file.</p>
        <p>We need to approach this task from the server side and the client side for different scenarios, using PHP and JavaScript, respectively.</p>
        <p>This is a work in progress. I'm currently writing this section. But for now, let me just show my code snippets.</p>
        <pre><code class="language-php">&lt;?php

  $og_image = '<?php echo PATH; ?>/images/photography/SD_N18_5890_2_Web.jpg';
  // Default og image of the webpage

  $url_query_string = $_SERVER['QUERY_STRING'];
  // Query URL String

  if ($url_query_string != null) {
    parse_str($url_query_string, $url_params);

    if ($url_params['photo'] != null) {
      $photoid = explode('_', $url_params['photo']);

      // START: QUERY PHOTO FILENAMES
      $query_filename = "SELECT filename FROM photos WHERE id = '$photoid[1]'";
      $result_filename = $conn->query($query_filename);
      if (!$result_filename) die("Fatal Error");
      $result_filename->data_seek(0);
      $filename_url = $result_filename->fetch_assoc()['filename'];
      $result_filename->close();
      // END: QUERY PHOTO FILENAMES

      $og_image = '<?php echo PATH; ?>/images/photography/'.$filename_url;
      $og_image_default = '<?php echo PATH; ?>/images/photography/SD_N18_5890_2_Web.jpg';
    }
  }
?&gt;

&lt;meta property="og:url" id="meta_og_url" content="&lt;?php echo PATH,$_SERVER['REQUEST_URI'];?&gt;" /&gt;
&lt;meta property="og:image" id="meta_og_image" content="&lt;?php 
  if (!isset($og_image))
    echo '<?php echo PATH; ?>/images/other/SD-IMG_4854-Edit-Web.jpg';
  else 
    echo $og_image;
?&gt;" /&gt;

&lt;script&gt;
  $meta_og_image_0 = '&lt;?php echo isset($og_image_default) ? $og_image_default : $og_image;?&gt;';
  // PHP passing variable to JQuery (JavaScript)
  // Here, the variable is the default og image address of the webpage
&lt;/script&gt;</code></pre>
        <p>This is a work in progress. I'll show code snippets in JavaScript to take care of other scenarios, too, in the near future.</p>
      </div><!--photo-dynamic-og-tag-->
      
    <div class="mb-5"><h3 id="photo-content-jumping" class="anchor">Reducing content jumping with CSS padding-bottom trick</h3>
        <p>When images are being loaded, the webpage dynamically makes room to display newly loaded images, if the footprints of the images are not specified in the HTML code. Jumpy webpages drastically reduces user experience.</p>
        <p>One way to solve it is to specify the width and height of the image in the <code class="language-html">&lt;img&gt;</code> tag in the HTML code. Another way is to use the Bootstrap grid system. However, I couldn't easily implement either solution.</p>
        <p>I chose not to use the Bootstrap grid system given the reasons stated in <a href="#photo-multi-column-layout">Responsive multi-column layout with CSS media queries</a>.
        <p>I couldn't easily specify the widths and heights of the images in the PHP-generated HTML, either. The HTML5 requires width and height specifications in pixels, but, as the result of my responsive design, the column width dynamically changes to adapt to different browser widths. </p>
        <p>My solution was to specify intrisic ratios for images &mdash; the so-called <code class="language-css">padding-bottom</code> trick. I used PHP to calculate the aspect ratios of the images and generate appropriate bottom paddings to leave enough space for the images. This is a work in progress. I'll show code snippets. More to come...</p>

      </div><!--CONTENT JUMPING-->

      <div class="mb-5"><h3 id="photo-lazy-loading" class="anchor">3-stage lazy loading images using JavaScript</h3>
        <p>To improve user experience on image-heavy webpages with limited bandwidth, I implemented image lazy loading with <a href="https://apoorv.pro/lozad.js/" target="_blank">Lozad.js</a>. It is a lightweight JavaScript lazy loader that uses <a href="https://www.w3.org/TR/intersection-observer/" target="_blank">IntersectionObserver API</a> with no external dependencies. It prioritizes loading the images visible in the viewport. It really enhances the user experience on image-heavy webpages with limited bandwidth.</p>
        <p>Typically, you include the following code in your JavaScript:</p>
        <pre><code class="language-javascript">const observer = lozad('.lozad', {
    rootMargin: '0px', // syntax similar to that of CSS Margin
    threshold: 0.2 // ratio of element convergence
});

observer.observe()</code></pre>
        <p>Also, you need to use <code class="language-html">data-src=""</code> instead of the regular <code class="language-html">src=""</code> in <code class="language-html">&lt;img&gt;</code> elements.</p>
        <p>The following is my own invention &mdash; well, invention is a big word. I have built upon it and made it a little smarter. I use a 3-stage lazy loading with different margin ranges fired at different times after the webpage is loaded with <code class="language-javascript">setTimeout</code> function. The idea is to focus on loading the images visible inside the viewport only, immediately after loading the webpage. After a few seconds, broaden the margin range and to pre-load more images as users scroll down to enhance user experience.</p>
        <pre><code class="language-javascript">const observer_1 = lozad('.lozad', {
    rootMargin: '0px', // syntax similar to that of CSS Margin
    threshold: 0.2 // ratio of element convergence
});

const observer_2 = lozad('.lozad', {
    rootMargin: '200px 0px', // syntax similar to that of CSS Margin
    threshold: 0 // ratio of element convergence
});

const observer_3 = lozad('.lozad', {
    rootMargin: '600px 0px', // syntax similar to that of CSS Margin
    threshold: 0 // ratio of element convergence
});

// Firing observer _1 right away to load images visible inside viewport only
observer_1.observe();

// Wait 5 seconds before firing observer_2, which has a broader range
setTimeout(function(){
    observer_2.observe();
},5000);

// Wait 10 seconds before firing observer_3, which has an even broader range
setTimeout(function(){
    observer_3.observe();
},10000);</code></pre>
    </div><!--LAZY LOADING-->

    </div><!--PHOTO PORTFOLIO-->
    <p>I hope you find this article helpful. You can find the source code on <a href="https://github.com/dongskyler/skylerdong.com-gen2" target="_blank">GitHub</a>. I periodically update this article and the source code. Please check back. Thank you for reading. <i class="fas fa-ankh"></i></p>
    </div><!--COL-->  
  </div><!--ROW-->
</div><!--MAINCONTENT-->
<?php include_once '../common/footer.php'; ?>
</body>
</html>
