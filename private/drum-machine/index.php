<?php
  include_once '../../common/config.php';
  define("HEADER_TYPE",'blogpost');
  // define("BG_IMG_MD",'medium/SD__A7T3305_Web.jpg');
  // define("BG_IMG_LG",'large/SD__A7T3305_Web_LG.jpg');
  define("SITE_TITLE",'Drum Machine');
  define("SITE_SUBTITLE",'Drum machine web app');
  define("SITE_SUBSUBTITLE",'Posted on April 30, 2020');
?>
<!DOCTYPE html>
<?php
  include_once '../../common/htmlTag.php';
?>
<head>
<?php include_once '../../common/head.php'; ?>
<title>Drum Machine | App - Skyler Dong</title>
<link rel="preload" type="text/css" href="styles.css" as="style" onload="this.rel='stylesheet'">
</head>
<body>
<?php
  include_once '../../common/navbar.php'; 
  // include_once '../../common/header.php';
?>
<!-- Main Content -->
<div class="container-xl maincontent">
  <h1>Drum Machine (JavaScript)</h1>
    <div class="row">
      <div class="col-12 mb-3 col-md-10">
        <p>I completed the JavaScript drum machine project as practice.</p>
        <div class="keys">
          <div data-key="65" class="key">
            <kbd>A</kbd>
            <span class="sound">clap</span>
          </div>
          <div data-key="83" class="key">
            <kbd>S</kbd>
            <span class="sound">hihat</span>
          </div>
          <div data-key="68" class="key">
            <kbd>D</kbd>
            <span class="sound">kick</span>
          </div>
          <div data-key="70" class="key">
            <kbd>F</kbd>
            <span class="sound">openhat</span>
          </div>
          <div data-key="71" class="key">
            <kbd>G</kbd>
            <span class="sound">boom</span>
          </div>
          <div data-key="72" class="key">
            <kbd>H</kbd>
            <span class="sound">ride</span>
          </div>
          <div data-key="74" class="key">
            <kbd>J</kbd>
            <span class="sound">snare</span>
          </div>
          <div data-key="75" class="key">
            <kbd>K</kbd>
            <span class="sound">tom</span>
          </div>
          <div data-key="76" class="key">
            <kbd>L</kbd>
            <span class="sound">tink</span>
          </div>
        </div><!-- keys -->
        <audio data-key="65" src="sounds/clap.wav"></audio>
        <audio data-key="83" src="sounds/hihat.wav"></audio>
        <audio data-key="68" src="sounds/kick.wav"></audio>
        <audio data-key="70" src="sounds/openhat.wav"></audio>
        <audio data-key="71" src="sounds/boom.wav"></audio>
        <audio data-key="72" src="sounds/ride.wav"></audio>
        <audio data-key="74" src="sounds/snare.wav"></audio>
        <audio data-key="75" src="sounds/tom.wav"></audio>
        <audio data-key="76" src="sounds/tink.wav"></audio>
      </div><!--col-->
  </div><!--row-->
</div><!--maincontent-->
<?php include_once '../../common/footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.15.1/d3.min.js"></script>
<script defer src="app.js"></script>
</body>
</html>
