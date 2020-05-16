<?php
  include_once '../../common/config.php';
  if ($_SERVER["SERVER_NAME"] == "localhost") {
    require_once '../../../login/API_KEY_GOOG_route-optimization_dev.php';
  }
  else {
    require_once '../../../login/API_KEY_GOOG_route-optimization_public.php';
  }
  define("SITE_TITLE",'App: Route Optimization');
  define("SITE_SUBTITLE",'Find the fastest route with multiple stops using JavaScript and Google Map API.');
  define("FADE_IN",'no');
  define("FOOTER_COLOR",'dark');
  define("OG_IMAGE", PATH.'/images/other/SD-IMG_4854-Edit-Web.jpg');
?>
<!doctype html>
<?php
include_once '../../common/htmlTag.php';
?>
<head>
<?php include_once '../../common/head.php';?>
<title>Route Optimization | App - Skyler Dong</title>
</head>
<body>
<?php include_once '../../common/navbar.php'; ?>
<div class="container maincontent">
  <div class="row">
    <div class="col-12 mb-3">
      <div><h1>Route Optimization</h1></div>
      <div>
        <p>Enter up to 10 destinations, one per line.</p>
        <p>It is assumed that (1) the first location is the origin and (2) you don't return back to the origin.</p>
        <form action="javascript:void(0);" method="post" id="route-opt-form">
          <textarea type="text" id="route-opt-input" placeholder="Destinations" required autofocus rows="10" cols="35"></textarea><br>
          <button type="submit">Submit</button>
        </form>
      </div>
      <hr/>
      <div>
        <p>The optimal route is:</p>
        <p id="optimal-route"></p>
      </div>
      <hr/>
      <div>
        <p>We use Google Distance Matrix API and Google Map JavaScript API with a customized optimization algorithm to calculate the fastest route.</p>
      </div>
      <hr/>
      <div>
        <p class="footnote mb-3">This project was done in collaboration with <a href="https://github.com/yiningwoof" target="_blank">Yining Wang</a>. We thank <a href="https://github.com/bgjehu" target="_blank">Jieyi "Jay" Hu</a> for his support and input.</p>
      </div>
    </div><!--column-->
  </div><!--row-->
</div><!--maincontent-->
<?php include_once '../../common/footer.php'; ?>
<script defer src="<?php echo PATH; ?>/app/route-optimization/app.js"></script>
<script type="text/javascript" defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY_GOOGLE; ?>&callback=initMap"></script>
</script>
</body>
</html>
