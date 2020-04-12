<!--Footer-->
<!-- Search Modal -->
<div id="modalSearch" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-search"></i></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="gcse-search"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<footer>
<div class="container">
  <div class="row">
    <div class="col-12 mb-3 text-left col-md-8">
      <span><a href="<?php echo PATH;?>/contact">Contact</a></span>
      <span>&nbsp;&#124;&nbsp;</span>
      <span><a href="<?php echo PATH;?>/about/#copyright-notice">Copyright Notice</a></span>
    </div>
    <div class="d-flex col-12 justify-content-left col-md-4 justify-content-md-end">
      <ul class="social-icon">
        <li class="pr-2 pl-md-2"><a href="mailto:skyler@skylerdong.com"><i class="fas fa-envelope-square fa-3x"></i></a>
        </li>
        <li class="pr-2 pl-md-2"><a href="https://www.linkedin.com/in/dongt/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
        </li>
        <li class="pr-2 pl-md-2"><a href="https://www.instagram.com/skyler.dong.art/" target="_blank"><i class="fab fa-instagram-square fa-3x"></i></a>
        </li>
      </ul>
    </div>
    <div class="col-12 text-left"><?php
      if (!defined('COPYRIGHT_NOTICE')) {
        echo 'Copyright &copy; ',date("Y"),' Skyler Dong.';
      }
      elseif (COPYRIGHT_NOTICE=='Images') {
        echo 'All images &copy; 2013&#8211;',date("Y"),' Skyler Dong. All rights reserved.';
      }
      else echo 'Copyright &copy; ',date("Y"),' Skyler Dong.';
      ?></div>
  </div><!--row-->
</div><!--container-->
</footer>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lozad.js/1.14.0/lozad.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" defer src="<?php echo PATH; ?>/js/prism.min.js"></script>
<script type="text/javascript" defer src="<?php echo PATH; ?>/js/<?php 
  echo ($_SERVER["SERVER_NAME"] == "localhost") ? 'script.js' : 'script.min.js';?>"></script>
<script type="text/javascript" defer src="https://cse.google.com/cse.js?cx=005518303321825845417:jw3lu6ptjrw"></script>
