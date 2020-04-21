<?php
  include_once '../common/methods.php';
  // MySQL
  if ($_SERVER["SERVER_NAME"] == "localhost") {
    require_once '../../config/login_mysql_local.php';
  }
  else {
    require_once '../../config/login_mysql_bluehost.php';
  }
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal Error");

  $og_image = 'https://skylerdong.com/images/photography/SD_N18_5890_2_Web.jpg';

  // Query URL String
  $url_query_string = $_SERVER['QUERY_STRING'];

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

      $og_image = 'https://skylerdong.com/images/photography/'.$filename_url;
      $og_image_default = 'https://skylerdong.com/images/photography/SD_N18_5890_2_Web.jpg';
    }
  }
  define("NAVBAR_COLOR",'dark');
  define("BG_IMG_MD",'photography/SD_N18_5890_2_Web.jpg');
  define("BG_IMG_LG",'large/SD_N18_5890_2_Web_LG.jpg');
  define("SITE_TITLE",'Photography');
  define("SITE_SUBTITLE",'<p><a href="https://www.instagram.com/skyler.dong.art/" target="_blank">Instagram: @skyler.dong.art</a></p><p>Read <a href="https://skylerdong.com/blog/?category=photograhy">my blogs on photography</a></p>');
  define("FADE_IN",'yes');
  define("COPYRIGHT_NOTICE",'Images');
?>
<!doctype html>
<?php
  include_once '../common/config.php';
  include_once '../common/htmlTag.php';
?>
<head>
<?php include_once '../common/head.php'; ?>
<meta name="keywords" content="photography,photo,gallery,portfolio,picture">
<title>Photography - Skyler Dong</title>
</head>
<body id="photography" class="bg-deepdark">
<?php
  include_once '../common/navbar.php';
  include_once '../common/header_photography.php';
?>
<!-- Main Content -->
<div class="container-xl maincontent fade-in-slow">
  <div class="filter-button-bar col-12 mx-auto col-md-10 filter-bar-photo mb-3">
    <button type="button" class="filter-button btn btn-outline-light active" data-class="all">All</button>
    <?php // START: QUERY CATEGORY NAMES (catname)
      $query_catnames = "SELECT name FROM categories";
      $result_catnames = $conn->query($query_catnames);
      if (!$result_catnames) die("Fatal Error");
      $rows_catnames = $result_catnames->num_rows;
      for ($i=0; $i<$rows_catnames; ++$i) {
        $result_catnames->data_seek($i);
        $catname = htmlspecialchars($result_catnames->fetch_assoc()['name']);
        echo '<button type="button" class="filter-button btn btn-outline-light" data-class="', $catname,'">', modifyQueryStr_cat($catname), '</button>',"\r\n";
      }
      $result_catnames->close();
      // END: QUERY CATEGORY NAMES
    ?>
    <!--<button type="button" class="filter-button btn btn-outline-light" data-class="latest">Latest</button>-->
  </div><!--FILTER BUTTON-->
  <div class="gallery">
  <?php
    chdir('../images/photography');
    $images=glob('*.jpg',GLOB_BRACE);
    shuffle($images);
    foreach ($images as $image) {
      list($width,$height)=getimagesize($image);
      $aspect=round($height/$width*10000)/100;      
      echo '<a class="pop" id="photoid_';
      
      // START: QUERY PHOTO IDS
      $query_id = "SELECT id FROM photos WHERE filename = '$image'";
      $result_id = $conn->query($query_id);
      if (!$result_id) die("Fatal Error");
      $result_id->data_seek(0);
      echo modifyQueryStr_title($result_id->fetch_assoc()['id']);
      $result_id->close();
      // END: QUERY PHOTO IDS
      
      echo '"><div class="photo-block filterE mb-3" data-class="';

      // START: QUERY FILTER CATEGORIES OF EACH PHOTO
      $query_cat = "SELECT categories.name FROM photos_in_categories INNER JOIN photos ON photos.id = photos_in_categories.id INNER JOIN categories ON categories.category_id = photos_in_categories.category_id WHERE filename = '$image'";
      $result_cat = $conn->query($query_cat);
      if (!$result_cat) die("Fatal Error");
      $rows_cat = $result_cat->num_rows;
      for ($i=0; $i<$rows_cat; ++$i) {
        $result_cat->data_seek($i);
        $category_class = htmlspecialchars($result_cat->fetch_assoc()['name']);
        if ($i>0) echo ' ';
        echo $category_class;
      }
      $result_cat->close();
      // END: QUERY FILTER CATEGORIES OF EACH PHOTO

      echo '"><div class="responsive-container';
      if ($aspect >= 100) {
        echo ' photo-portrait';
      }
      else {
        echo ' photo-landscape';
      }
      echo'" style="padding-bottom:',$aspect,'%;">',
      '<img class="img-fluid lozad mb-1" data-src="',PATH,'/images/photography/',$image,
      '" alt="Skyler Dong Photography"></div><div class="text-center"><p class="photo-title">';

      // START: QUERY PHOTO TITLES
      $query_title = "SELECT title FROM photos WHERE filename = '$image'";
      $result_title = $conn->query($query_title);
      if (!$result_title) die("Fatal Error");
      $result_title->data_seek(0);
      echo modifyQueryStr_title($result_title->fetch_assoc()['title']);
      $result_title->close();
      // END: QUERY PHOTO TITLES

      echo '</p><p hidden class="photo-location">Location: ';

      // START: QUERY PHOTO PLACE
      $query_location  = "SELECT places.name FROM places INNER JOIN photos ON places.place_id = photos.place_id WHERE filename = '$image'";
      $result_location = $conn->query($query_location);
      if (!$result_location) die("Fatal Error");
      $result_location->data_seek(0);
        echo modifyQueryStr_location($result_location->fetch_assoc()['name']);
      $result_location->close();

      echo ', ';

      $query_location  = "SELECT states.name FROM places INNER JOIN photos ON places.place_id = photos.place_id INNER JOIN states ON places.state_id = states.state_id WHERE filename = '$image'";
      $result_location = $conn->query($query_location);
      if (!$result_location) die("Fatal Error");
      $result_location->data_seek(0);
        echo modifyQueryStr_location($result_location->fetch_assoc()['name']);
      $result_location->close();
      // END: QUERY PHOTO PLACE
      echo '.</p></div></div></a>';
    }
    chdir('../../photography');
  ?>
  </div><!--GALLERY-->
</div><!--maincontent-->
<!-- Modal -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="photoModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <img src="" class="modal-img">
        <p class="modal-photo-title text-center">Title</p>
        <p class="modal-photo-location">Location</p>
        <p class="modal-photo-category">Category</p>
      </div>
    </div>
  </div>
</div>
<?php include_once '../common/footer.php';?>
</body>
</html>
<?php
  $conn->close();
?>
