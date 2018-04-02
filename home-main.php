<section class="tz-lastest-shop theme-white lastest-shop-style">
  <h3 class="tz-title-bold-3"><?php echo $HOME_TITLE_2; ?></h3>
  <?php echo $HOME_descrption_2; ?>
  <div class="container">
    <div class="row">      
      <?php foreach($packages as $package): ?>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 laster-shop-item">
        <div class="laster-thumb"> <img src="<?php echo $package[0]; ?>" alt="travel" class="showOverlay showOverlay4"></div>
        <div class="box1"><h6><a href="#"><?php echo $package[1]; ?></a></h6>
        <small><?php echo $package[2]; ?></small></div>
      </div>
      <?php endforeach; ?>    
    </div>
</section>



<section class="tz-the-say theme-black">
  <button class="say_prev"><i class="fa fa-angle-left"></i></button>
  <button class="say_next"><i class="fa fa-angle-right "></i></button>
  <div class="container">
    <h3 class="tz-title-bold-3">GALLERY</h3>
    <div class="row">
      <ul class="tz-say-slider">
        <li><a href="images/gallery/1.jpg" data-lightbox="example-set" ><img class="tz-avata example-image" src="images/gallery/1.jpg" alt="Gallery"/></a></li>
        <li><a href="images/gallery/2.jpg" data-lightbox="example-set" ><img class="tz-avata example-image" src="images/gallery/2.jpg" alt="Gallery"/></a></li>
        <li><a href="images/gallery/3.jpg" data-lightbox="example-set" ><img class="tz-avata example-image" src="images/gallery/3.jpg" alt="Gallery"/></a></li>
        <li><a href="images/gallery/4.jpg" data-lightbox="example-set" ><img class="tz-avata example-image" src="images/gallery/4.jpg" alt="Gallery"/></a></li>
      </ul>
    </div>
    <!--end class row--> 
  </div>
  <!--end class container--> 
</section>
<!--end class tz-the-say-->


