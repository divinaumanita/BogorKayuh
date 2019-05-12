<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Daftar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i" rel="stylesheet">

    <link rel="stylesheet" href="bkayuh/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="bkayuh/css/animate.css">
    
    <link rel="stylesheet" href="bkayuh/css/owl.carousel.min.css">
    <link rel="stylesheet" href="bkayuh/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="bkayuh/css/magnific-popup.css">

    <link rel="stylesheet" href="bkayuh/css/aos.css">

    <link rel="stylesheet" href="bkayuh/css/ionicons.min.css">

    <link rel="stylesheet" href="bkayuh/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="bkayuh/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="bkayuh/css/flaticon.css">
    <link rel="stylesheet" href="bkayuh/css/icomoon.css">
    <link rel="stylesheet" href="bkayuh/css/style.css">
  </head>
  <body>

  <!-- ini bekas hamburger -->
    
  <nav class="navbar navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
          <div class="container d-flex align-items-stretch">
              <div class="col-3 d-flex align-items-right">
                <a class="navbar-brand" href="<?php echo e(url ('/')); ?>" >Bogor<span>Kayuh</span></a>
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('bkayuh/images/sepeda2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-2 bread">Bogor Kayuh</h1>
            <div class="main">

                <div class="container">
                    <div class="signup-content">
                        <!-- <form method="POST" id="signup-form" class="signup-form"> -->
                        <form method="POST" action="<?php echo e(route('register')); ?>" aria-label="<?php echo e(__('Register')); ?>">
                            <?php echo csrf_field(); ?>
                            <!-- <h2>Sign up </h2> -->
                            <p class="desc">Sekali mendaftar untuk berkali-kali penyewaan Sepeda</p>
                            <!-- <div class="form-group">
                                <input type="text" class="form-input" name="name" id="name" placeholder="Nama Lengkap"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="name" id="name" placeholder="Nama Pengguna"/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="no_telp" id="no_telp" placeholder="No Telepon"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="alamat" id="alamat" placeholder="Alamat"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="kata_sandi" id="kata_sandi" placeholder="Kata Sandi min 8 karakter"/>
                                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="kata_sandi" id="kata_sandi" placeholder="Konfirmasi kata sandi"/>
                                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            </div> -->
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group">
                            <!-- <label for="nama" class="form-input"><?php echo e(__('Nama Lengkap')); ?></label> -->
        
                            <div class="form-input">
                                <input id="nama" placeholder="Nama Lengkap" type="text" class="form-input<?php echo e($errors->has('nama') ? ' is-invalid' : ''); ?>" name="nama" value="<?php echo e(old('nama')); ?>" required autofocus>

                                <?php if($errors->has('nama')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('nama')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="form-input">
                            <!-- <label for="nama_pengguna" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nama Pengguna')); ?></label> -->

                            <div class="form-input">
                                <input id="nama_pengguna" placeholder="Nama Pengguna" type="text" class="form-input<?php echo e($errors->has('nama_pengguna') ? ' is-invalid' : ''); ?>" name="nama_pengguna" value="<?php echo e(old('nama_pengguna')); ?>" required autofocus>

                                <?php if($errors->has('nama_pengguna')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('nama_pengguna')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="form-input">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-mail')); ?></label> -->

                            <div class="form-input">
                                <input id="email" placeholder="Email" type="email" class="form-input<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="form-input">
                            <!-- <label for="no_telepon" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nomor Telpon')); ?></label> -->

                            <div class="form-input">
                                <input id="no_telepon" placeholder="No. Telepon" type="text" class="form-input<?php echo e($errors->has('no_telepon') ? ' is-invalid' : ''); ?>" name="no_telepon" value="<?php echo e(old('no_telepon')); ?>" required>

                                <?php if($errors->has('no_telepon')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('no_telepon')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="form-input">
                            <!-- <label for="alamat" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Alamat')); ?></label> -->

                            <div class="form-input">
                                <input id="alamat" placeholder="Alamat" type="text" class="form-input<?php echo e($errors->has('alamat') ? ' is-invalid' : ''); ?>" name="alamat" value="<?php echo e(old('alamat')); ?>" required>

                                <?php if($errors->has('alamat')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('alamat')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="form-input">
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
                        </div>

                        <div class="form-group">
                        <div class="form-input">
                            <!-- <label for="kata_sandi_confirmation" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Konfirmasi Kata Sandi')); ?></label> -->

                            <div class="form-input">
                                <input id="kata_sandi_confirmation" placeholder="Konfirmasi Kata Sandi" type="password" class="form-input" name="kata_sandi_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-input">

                            </div> 

                        </div>
                        <div class="form-group">
                            <button type="submit" class="submit-link submit">
                                                    <?php echo e(__('Daftar')); ?>

                            </button>

                                <!-- <input type="submit" name="submit" id="submit" class="form-submit submit" value="Sign up"/> -->
                                <!-- <a href="<?php echo e(route('register')); ?>" class="submit-link submit">Daftar</a> -->
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

        <!-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Daftar')); ?>

                                </button>
                            </div>
                        </div> -->

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


  <script src="bkayuh/js/jquery.min.js"></script>
  <script src="bkayuh/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="bkayuh/js/popper.min.js"></script>
  <script src="bkayuh/js/bootstrap.min.js"></script>
  <script src="bkayuh/js/jquery.easing.1.3.js"></script>
  <script src="bkayuh/js/jquery.waypoints.min.js"></script>
  <script src="bkayuh/js/jquery.stellar.min.js"></script>
  <script src="bkayuh/js/owl.carousel.min.js"></script>
  <script src="bkayuh/js/jquery.magnific-popup.min.js"></script>
  <script src="bkayuh/js/aos.js"></script>
  <script src="bkayuh/js/jquery.animateNumber.min.js"></script>
  <script src="bkayuh/js/bootstrap-datepicker.js"></script>
  <script src="bkayuh/js/jquery.timepicker.min.js"></script>
  <script src="bkayuh/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="bkayuh/js/google-map.js"></script>
  <script src="bkayuh/js/main.js"></script>
    
  </body>
</html><?php /**PATH C:\xampp\htdocs\divinProject\multi-auth\resources\views/auth/register.blade.php ENDPATH**/ ?>