<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Masuk</title>
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
    
    
  <!-- ini bekas hamburger -->
    
  <nav class="navbar navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
          <div class="container d-flex align-items-stretch">
              <div class="col-3 d-flex align-items-right">
                <a class="navbar-brand" href="<?php echo e(url ('/')); ?> ">Bogor<span>Kayuh</span></a>
              </div>
              <div class="col-9 d-flex align-items-right text-right">
                <ul class="ftco-social mt-2 mr-3">
                  <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> -->
                </ul>
    
                
                    </nav>
                <!-- </button> -->
              </div>
   
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background: url('images/sepeda2.jpg')" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
    
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-2 bread">Bogor Kayuh</h1>
          
            <div class="main">

                <div class="container">
                    <div class="signup-content">
                        <!-- <form method="POST" id="signup-form" class="signup-form"> -->
                            <!-- <h2>Sign up </h2> -->
                            <p class="desc">Masukkan lagi email dan kata sandi untuk masuk.</p>
    
                            <!-- <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Email"/> -->
                    <div class="card-body">
                        <form method="POST" action='<?php echo e(url("login/penyewa")); ?>' aria-label="<?php echo e(__('Login')); ?>">
                            <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <!-- <label for="email" class="form-input"><?php echo e(__('Email')); ?></label> -->

                            <div class="form-input">
                                <input id="email" placeholder="Email" type="email" class="form-input<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                            </div>

                        <div class="form-group">
                            <!-- <label for="kata_sandi" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Kata Sandi')); ?></label> -->

                            <div class="form-input">
                                <input id="kata_sandi" placeholder="Kata Sandi" type="password" class="form-input<?php echo e($errors->has('kata_sandi') ? ' is-invalid' : ''); ?>" name="kata_sandi" required>

                                <?php if($errors->has('kata_sandi')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('kata_sandi')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                            
                            <!-- <div class="form-group"> -->
                                <!-- <input type="text" class="form-input" name="kata_sandi" id="kata_sandi" placeholder="Kata Sandi min 8 karakter"/> -->
                                <!-- <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span> -->
                            </div> 

                            <div class="form-group">
                                <button type="submit" class="submit-link submit">
                                    <?php echo e(__('Masuk')); ?>

                                </button>

                                <!-- <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Lupa sandi?')); ?>

                                    </a>
                                <?php endif; ?> -->
                            </div>
                                <!-- <input type="submit" name="submit" id="submit" class="form-submit submit" value="Sign up"/> -->
                                <!-- <a href="sewa.html" class="submit-link submit">Masuk</a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
           
        </div>

        

        <!-- JS -->
        <!-- <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
    </html> -->
    

    

 <!-- Footer
 <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="row"></div>
      <div class="col-md-12 text-center">
        <p>
            Copyright BogorKayuh &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
        </p>
      </div>
    </div>
  </div>
</footer>    -->
    
  

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
  <script src="<?php echo e(asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/google-map.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/main.js')); ?>"></script>
    
  </body>
</html><?php /**PATH C:\xampp\htdocs\divinProject\multi-auth\resources\views/auth/loginpenyewa.blade.php ENDPATH**/ ?>