<!-- Inside <head>-->
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Noto+Sans&amp;family=Sacramento&amp;family=Ubuntu&amp;display=swap" as="style" onload="this.rel='stylesheet'">
<link rel="stylesheet" type="text/css" href= "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css">
<link rel="preload" type="text/css" href= "<?php echo PATH; ?>/css/prism.min.css" as="style" onload="this.rel='stylesheet'">
<link rel="stylesheet" type="text/css" href= "<?php echo PATH; ?>/css/styles.min.css">
<script async type="text/javascript" src="https://kit.fontawesome.com/54c2c027a8.js" crossorigin="anonymous"></script>
<style>
  #masthead-image {
    background-image: url('<?php echo PATH;?>/images/<?php echo BG_IMG_MD;?>');
  }
  @media only screen and (min-width:768px){
    #masthead-image {
      background-image: url('<?php echo PATH;?>/images/<?php echo BG_IMG_LG;?>');
    }
  }
</style>
<meta name="author" content="Tiannong Skyler Dong">
<meta name="description" content="<?php echo strip_tags(SITE_SUBTITLE);?>" />
<meta property="og:title" content="<?php echo strip_tags(SITE_TITLE),' - Skyler Dong';?>" />
<meta name="og:description" content="<?php echo strip_tags(SITE_SUBTITLE);?>" />
<meta property="og:type" content="<?php
  if (!defined('HEADER_TYPE') || HEADER_TYPE=='site')
    echo 'website';
  elseif (HEADER_TYPE=='blogpost')
    echo 'article';
  else echo 'website';
?>" />
<meta property="og:url" id="meta_og_url" content="<?php echo PATH,$_SERVER['REQUEST_URI'];?>" />
<meta property="og:image" id="meta_og_image" content="<?php 
  if (!isset($og_image))
    echo '<?php echo PATH;?>/images/other/SD-IMG_4854-Edit-Web.jpg';
  else 
    echo $og_image;
?>" />
<script>
$meta_og_image_0 = '<?php echo isset($og_image_default) ? $og_image_default : $og_image;?>';
</script>
<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="<?php echo PATH;?>/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo PATH;?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo PATH;?>/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo PATH;?>/favicon/site.webmanifest">
<link rel="mask-icon" href="<?php echo PATH;?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="<?php echo PATH;?>/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#f9f9f9">
<meta name="msapplication-config" content="<?php echo PATH;?>/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106597051-4"></script>
<script async>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-106597051-4');
</script>
