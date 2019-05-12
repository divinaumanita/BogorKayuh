<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Riwayat Sewa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="<?php echo e(asset('bkayuh/css/open-iconic-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bkayuh/css/animate.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('bkayuh/css/owl.carousel.min.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('bkayuh/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bkayuh/css/magnific-popup.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('bkayuh/css/aos.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('bkayuh/css/ionicons.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('bkayuh/css/bootstrap-datepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bkayuh/css/jquery.timepicker.css')); ?>">

    
    <link rel="stylesheet" href="<?php echo e(asset('bkayuh/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bkayuh/css/icomoon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bkayuh/css/style.css')); ?>">
  </head>
  <body>
    
  <nav class="navbar navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
          <div class="container d-flex align-items-stretch">
              <div class="col-3 d-flex align-items-right">
                <a class="navbar-brand" href="home1">Bogor<span>Kayuh</span></a>
              </div>
              <div class="col-9 d-flex align-items-right text-right">
                <ul class="ftco-social mt-2 mr-3">
                  <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> -->
                </ul>
    
                <button class="navbar-toggler d-flex align-items-right" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                  
                  <span class="pt-1 mr-1"></span> <span class="oi oi-menu"></span>
                
                      <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="<?php echo e(route('profil')); ?>" class="nav-link">Profil</a></li>
                          <li class="nav-item"><a href="home1" class="nav-link">Halaman Penyewaan</a></li>
                          <li class="nav-item"><a href="<?php echo e(route('riwayatsewa')); ?>" class="nav-link">Riwayat Sewa</a></li>
                          <li class="nav-item">
                            <a href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Keluar')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                            </li>
                        </ul>
                      </div>
                      <!-- </div> -->
                  </button>
                    </nav>
                <!-- </button> -->
              </div>

   
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('bkayuh/images/sepeda2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-2 bread">Riwayat Sewa</h1>
           
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('bkayuh/images/jenis_1.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<!-- <span class="day">18</span>
            			<span class="mos">April</span>
            			<span class="yr">2019</span> -->
              	</div>
              	<div class="desc p-4">
                <h3 class="heading mt-2"><p><?php echo strtoupper ($jeniss); ?></p></h3>
	                <a class="btn btn-primary"><p><?php echo ($statuss); ?></p></a>
                    <p><?php echo nl2br($tanggal." \n"); ?></p>
                    <p><?php echo nl2br($jumlahs." \n"); ?></p>
                    <p><?php echo nl2br($bayars." \n"); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('bkayuh/images/jenis_2.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<!-- <span class="day">25</span>
            			<span class="mos">April</span>
            			<span class="yr">2019</span> -->
              	</div>
              	<div class="desc p-4">
                <h3 class="heading mt-2"><p><?php echo strtoupper($jeniss); ?></p></h3>
	                <a class="btn btn-primary"><p><?php echo ($statuss); ?></p></a>
                    <p><?php echo nl2br($tanggal." \n"); ?></p>
                    <p><?php echo nl2br($jumlahs." \n"); ?></p>
                    <p><?php echo nl2br($bayars." \n"); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('bkayuh/images/jenis_3.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
            			<!-- <span class="day">28</span>
            			<span class="mos">April</span>
            			<span class="yr">2019</span> -->
              	</div>
              	<div class="desc p-4">
	                <h3 class="heading mt-2"><p><?php echo strtoupper($jeniss); ?></p></h3>
	                <a class="btn btn-primary"><p><?php echo ($statuss); ?></p></a>
                    <p><?php echo nl2br($tanggal." \n"); ?></p>
                    <p><?php echo nl2br($jumlahs." \n"); ?></p>
                    <p><?php echo nl2br($bayars." \n"); ?></p>
                    
                </div>
              </div>
            </div>
          </div>
          <!-- akhir dari cerita kita gengs okesip -->
          </div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


 <!-- Footer -->
 <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="row"></div>
      <div class="col-md-12 text-center">
        <p>
            Copyright BogorKayuh &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
        </p>
      </div>
    </div>
  </div>
</footer>   
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


 
  <script src="<?php echo e(asset('bkayuh/js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/jquery.easing.1.3.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/jquery.waypoints.min.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/jquery.stellar.min.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/jquery.magnific-popup.min.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/jquery.animateNumber.min.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/bootstrap-datepicker.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/jquery.timepicker.min.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/scrollax.min.js')); ?>"></script>
  <script src="<?php echo e(asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="bkayuh/js/google-map.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/main.js')); ?>"></script>

  </body>
</html><?php /**PATH C:\xampp\htdocs\divinProject\multi-auth\resources\views/sewa/riwayat.blade.php ENDPATH**/ ?>