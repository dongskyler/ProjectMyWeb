<!doctype html>
<?php
    include_once '../../common/config.php';
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
        <p>Enter up to 10 destinations, one per line:</p>
        <form action="javascript:void(0);" method="post" id="route-opt-form">
          <textarea type="text" id="route-opt-input" placeholder="Destinations" required autofocus rows = "5" cols = "50"></textarea><br>
          <button type="submit">Submit</button>
        </form>
      </div>
      <div id="right-panel">
      <div id="inputs">
        <pre>
var origin1 = {lat: 55.930, lng: -3.118};
var origin2 = 'Greenwich, England';
var destinationA = 'Stockholm, Sweden';
var destinationB = {lat: 50.087, lng: 14.421};
        </pre>
      </div>
      <div>
        <strong>Results</strong>
      </div>
      <div id="output"></div>
    </div>
    <div id="map"></div>
    </div><!--column-->
  </div><!--row-->
</div><!--maincontent-->
<?php include_once '../../common/footer.php'; ?>
<script src="<?php echo PATH; ?>/app/route-optimization/js/temp.js" defer></script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpXLEfMiVNZq5JEW6J1GlIFsLnh412Ekg&callback=initMap">
</script>
</body>
</html>
