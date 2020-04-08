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
    </div><!--column-->
  </div><!--row-->
</div><!--maincontent-->
<?php include_once '../../common/footer.php'; ?>
<script src="<?php echo PATH; ?>/app/route-optimization/js/temp2.js" defer></script>
</body>
</html>
