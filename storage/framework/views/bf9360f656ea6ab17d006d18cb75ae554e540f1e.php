<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sunting Profil</title>
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
                          <li class="nav-item"><a href="<?php echo e(route('maunyewa')); ?>" class="nav-link">Halaman Penyewaan</a></li>
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
      <!-- background jadi agak item -->
      <div class="overlay"></div>
      <div class="container">
        <!-- jadi dibawah dan putih -->
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <!-- buat ketengah dan font masih hitam biasa -->
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-2 bread">Sunting Profil</h1>
            
            <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p> -->
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 py-5">
              <div class="heading-section heading-section-no-line ftco-animate mb-5">
                <h2 class="mb-2">Sunting Profil </h2>

                

                
              </div>

              <!-- ini isi form edit -->
              <!-- <div class="container">
                <h1>Edit Profile</h1>
                <hr>
              <div class="row"> -->
                <!-- ini kodingan buat upload foto -->
                  <!-- left column -->
                  <!-- <div class="col-md-3">
                    <div class="text-center">
                      <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                      <h6>Upload a different photo...</h6>
                      
                      <input type="file" class="form-control">
                    </div>
                  </div> -->
                  
                  <!-- edit form column -->
                  <div class="col-md-9 personal-info">
                    <div class="alert alert-info alert-dismissable">
                      <a class="panel-close close" data-dismiss="alert">×</a> 
                      <i class="fa fa-coffee"></i>
                      Jika Anda ingin menyunting profil jangan lupa tekan <strong>simpan.</strong>
                    </div>

                    <!-- <form class="form-horizontal" role="form"> -->
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('editprofil')); ?>">
                        <?php echo csrf_field(); ?>
                       
                        <div class="form-group">
                                <label for="nama" class="col-lg-3 control-label"><?php echo e(__('Nama Lengkap')); ?></label>

                                <div class="col-lg-8">
                                    <input id="nama" type="text" class="form-control<?php echo e($errors->has('nama') ? ' is-invalid' : ''); ?>" name="nama" value="<?php echo e(old('nama')); ?>" required autofocus>

                                    <?php if($errors->has('nama')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('nama')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="nama_pengguna" class="col-lg-3 control-label"><?php echo e(__('Nama Pengguna')); ?></label>

                                <div class="col-lg-8">
                                    <input id="nama_pengguna" type="text" class="form-control<?php echo e($errors->has('nama_pengguna') ? ' is-invalid' : ''); ?>" name="nama_pengguna" value="<?php echo e(old('nama_pengguna')); ?>" required autofocus>

                                    <?php if($errors->has('nama_pengguna')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('nama_pengguna')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="email" class="col-lg-3 control-label"><?php echo e(__('Email')); ?></label>

                                <div class="col-lg-8">
                                    <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="no_telepon" class="col-lg-3 control-label"><?php echo e(__('No. Telepon')); ?></label>

                                <div class="col-lg-8">
                                    <input id="no_telepon" type="text" class="form-control<?php echo e($errors->has('no_telepon') ? ' is-invalid' : ''); ?>" name="no_telepon" value="<?php echo e(old('no_telepon')); ?>" required autofocus>

                                    <?php if($errors->has('no_telepon')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('no_telepon')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="alamat" class="col-lg-3 control-label"><?php echo e(__('Alamat')); ?></label>

                                <div class="col-lg-8">
                                    <input id="alamat" type="text" class="form-control<?php echo e($errors->has('alamat') ? ' is-invalid' : ''); ?>" name="alamat" value="<?php echo e(old('alamat')); ?>" required autofocus>

                                    <?php if($errors->has('alamat')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('alamat')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                        </div>
                      
                      
                      <!-- <div class="form-group">
                        <label class="col-md-3 control-label">Kata Sandi</label>
                        <div class="col-md-8">
                          <input class="form-control" type="password" value="get kata sandi">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Konfirmasi kata sandi</label>
                        <div class="col-md-8">
                          <input class="form-control" type="password" value="get kata sandi">
                        </div>
                      </div> -->
                      <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Simpan')); ?>

                            </button>
                            <span></span>
                            <a href="<?php echo e(route('home1')); ?>" class="btn btn-default">Kembali</a>
                            <!-- <input type="reset" class="btn btn-default" value="Batal"> -->
                            <input type="hidden" name="_method" value="PUT">
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
            <hr>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo e(asset('bkayuh/js/google-map.js')); ?>"></script>
  <script src="<?php echo e(asset('bkayuh/js/main.js')); ?>"></script>
    
  </body>
</html><?php /**PATH C:\xampp\htdocs\divinProject\multi-auth\resources\views/auth/editprofil.blade.php ENDPATH**/ ?>