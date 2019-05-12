<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Notifikasi Sewa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i" rel="stylesheet">

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
            <h1 class="mb-2 bread">Penyewaan Berhasil!</h1>

            <!-- input something dalem header utama -->
            <section class="ftco-intro py-5" style="background-image: url(bkayuh/images/sepeda2.jpg);">
              <div class="overlay"></div>
              <div class="container">
                <div class="row d-flex align-items-center">
                  <div class="col-md-6 ftco-animate">
                    <h3 class="subheading"> <?php echo nl2br($mbayar."\n"); ?> </h3>
                    <h3 class="subheading"> <?php echo nl2br($twaktu."\n"); ?> </h3>
                    
                    
                    
                        
                      
                    
                    
                    
                          <!-- <form action="#" class="subscribe-form">
                            <div class="form-group d-flex">
                              <input type="text" class="form-input" placeholder="ID Penyewaan"> -->
                              <!-- <input type="submit" value="Pinjam" class="submit px-3"> -->
                          <form>
                            <div>    
                            </div>
                          </form>
                        
                          
                  </div> 
                  
                  <div class="col-md-6 pl-md-5 ftco-animate">
                  <h3 class="subheading"> <?php echo nl2br($mbiaya."\n"); ?> </h3>
                    <h1 class="subheading"> Waktu Tersisa </h1>
                      <p><a class="btn btn-primary px-4 py-2"><?php echo nl2br($times."\n"); ?> </a></p > 
                </div>

                        <!-- <div class="time pl-4" id="hours"></div> -->
                        <!-- <div class="time pl-4" id="minutes"></div> -->
                        <!-- <div class="time pl-4" id="seconds"></div> -->
                      <!-- </div> --> 
                      
                    <!-- </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-8 py-5">
    				<div class="heading-section heading-section-no-line ftco-animate mb-5">
	            <h2 class="mb-2">Penyewaan Berhasil!</h2> -->
	          <!-- <section>
	          </div>
	          <div class="event-wrap d-md-flex ftco-animate">
	          	<div class="text pl-md-5">
	          		<div class="meta">
                        <div>
                        
                      </div>
                    </form>	
                  </p>

                   
                      <div>
                      
                    </div>
        
                 </form>	 -->
        
        
                 <section>
	          </div>
	          <div class="event-wrap d-md-flex ftco-animate">
	          	<!-- <div class="img"style="background-image: url(images/sermon-1.jpg);"></div> -->
	          	<div class="text pl-md-5">
	          		
	          		<div class="meta">
                 </form>	
                </p>
                

		  					<p class="mt-4 btn-customize">
                    <a href="<?php echo e(route('batalsewa')); ?>" class="btn btn-black px-4 py-3 ml-lg-2"><span class="icon"></span> Batal Sewa</a>
                   
                </p>
            </div>
          </section>  
	          

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
</html><?php /**PATH C:\xampp\htdocs\divinProject\multi-auth\resources\views/sewa/notifikasisewa.blade.php ENDPATH**/ ?>