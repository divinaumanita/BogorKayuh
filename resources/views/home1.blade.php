<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sewa Sepeda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('bkayuh/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bkayuh/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('bkayuh/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('bkayuh/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('bkayuh/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('bkayuh/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('bkayuh/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('bkayuh/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('bkayuh/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('bkayuh/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('bkayuh/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('bkayuh/css/style.css')}}">
  </head>
  <body>
    
      <nav class="navbar navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
          <div class="container d-flex align-items-stretch">
              <div class="col-3 d-flex align-items-right">
                <a class="navbar-brand" href="{{ url ('/home1') }} ">Bogor<span>Kayuh</span></a>
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
                          <li class="nav-item"><a href="{{ route('profil') }}" class="nav-link">Profil</a></li>
                          <li class="nav-item"><a href="home1" class="nav-link">Halaman Penyewaan</a></li>
                          <li class="nav-item"><a href="{{ route('riwayatsewa') }}" class="nav-link">Riwayat Sewa</a></li>
                          <li class="nav-item">
                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Keluar') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                      </div>
                      <!-- </div> -->
                  </button>
                    </nav>
                <!-- </button> -->
              </div>

    
              <!-- <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a href="profile.html" class="nav-link">Profil</a></li>
                  <li class="nav-item"><a href="sewa.html" class="nav-link">Sewa Sepeda</a></li>
                  <li class="nav-item"><a href="riwayat.html" class="nav-link">Riwayat Sewa</a></li>
                </ul>
              </div> -->
            <!-- </div>
          </nav> -->
   
    <!-- END nav -->

    <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5> Selamat menyewa sepeda! </h5>

                    <form method="POST" action="{{ route('maunyewa') }}" aria-label="{{ __('Sewa') }}">
                            @csrf

                        <div class="form-group row">
                            <label for="waktu_mulai" class="col-md-4 col-form-label text-md-right">{{ __('Waktu Penyewaan') }}</label>

                            <div class="col-md-6">
                                <input id="waktu_mulai" type="timestamp" class="form-control{{ $errors->has('waktu_mulai') ? ' is-invalid' : '' }}" name="waktu_mulai" value="{{ old('waktu_mulai') }}" required autofocus>

                                @if ($errors->has('waktu_mulai'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('waktu_mulai') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="durasi" class="col-md-4 col-form-label text-md-right">{{ __('Lama Penyewaan') }}</label>

                            <div class="col-md-6">
                                <input id="durasi" type="integer" class="form-control{{ $errors->has('durasi') ? ' is-invalid' : '' }}" name="durasi" value="{{ old('durasi') }}" required autofocus>

                                @if ($errors->has('durasi'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('durasi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Sepeda') }}</label>

                            <div class="col-md-6">
                                <label><input type="radio" name="jenis" value="bmx"> BMX </label>
			                    <label><input type="radio" name="jenis" value="fixie"> Fixie </label>
                                <label><input type="radio" name="jenis" value="phoenix"> Phoenix </label>
                                <label><input type="radio" name="jenis" value="mec"> MEC </label>
                                <label><input type="radio" name="jenis" value="onthel"> Onthel </label>
                                <label><input type="radio" name="jenis" value="tigaroda"> 3Roda </label>
                                @if ($errors->has('jenis'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jenis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Sepeda') }}</label>

                            <div class="col-md-6">
                                <input id="jumlah" type="integer" class="form-control{{ $errors->has('jumlah') ? ' is-invalid' : '' }}" name="jumlah" value="{{ old('jumlah') }}" required autofocus>

                                @if ($errors->has('jumlah'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jumlah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sewa') }}
                                </button>
                            </div>
                </div>

                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <a href="{{ route('home1') }}" class="btn btn-primary">Kembali</a>
                            </div>
                </div>

                </div>
            </div> -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('bkayuh/images/sepeda2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-2 bread">Sewa Sepeda</h1>
            
          
            <section class="ftco-intro py-5" style="background-image: url('images/sepeda2.jpg');">
              <div class="overlay"></div>
              <div class="container">
                <div class="row d-flex align-items-center">
                  <div class="col-md-6 ftco-animate">
                  <form method="POST" action="{{ route('maunyewa') }}" aria-label="{{ __('Sewa') }}">
                            @csrf
                    <div class="form-group">
                            <!-- <label for="kata_sandi" class="col-md-4 col-form-label text-md-right">{{ __('Kata Sandi') }}</label> -->

                            <div class="form-input">
                                <input id="jumlah" placeholder="Jumlah Sepeda" type="integer" class="form-input{{ $errors->has('jumlah') ? ' is-invalid' : '' }}" name="jumlah" value="{{ old('jumlah') }}" required autofocus>

                                @if ($errors->has('jumlah'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jumlah') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
                    
                          <!-- <form action="#" class="subscribe-form">
                            <div class="form-group d-flex">
                              <input type="integer" class="form-control" placeholder="Masukkan jumlah sepeda maks 3">
                              <input type="#" value="Pinjam" class="submit px-3">
                            </div>
                          </form> -->
                  </div>           
                </div>
              </div>

              <div class="container">
                <div class="row d-flex align-items-center">
                  <div class="col-md-6 ftco-animate">

                    <!-- <h2 class="subheading"> Tentukan Durasi</h2> -->
                    <div class="form-group">
                            <!-- <label for="kata_sandi" class="col-md-4 col-form-label text-md-right">{{ __('Kata Sandi') }}</label> -->

                            <div class="form-input">
                                <input id="durasi" placeholder="Durasi Penyewaan" type="integer" class="form-input{{ $errors->has('durasi') ? ' is-invalid' : '' }}" name="durasi" required>

                                @if ($errors->has('durasi'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('durasi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <!-- <form action="#" class="subscribe-form">
                            <div class="form-group d-flex">
                              <input type="integer" class="form-control" placeholder="Masukkan durasi jam berupa integer">
                              <input type="#" value="Pinjam" class="submit px-3">
                            </div>
                          </form> -->

                          <!-- <button type="submit" class="btn btn-primary">
                                    {{ __('Sewa') }}
                            </button> -->

                        <div class="form-group">
                            <!-- <label for="kata_sandi" class="col-md-4 col-form-label text-md-right">{{ __('Kata Sandi') }}</label> -->
                            <!-- <input id="waktu_mulai" type="timestamp" class="form-control{{ $errors->has('waktu_mulai') ? ' is-invalid' : '' }}" name="waktu_mulai" value="{{ old('waktu_mulai') }}" required autofocus> -->
                            
                            <div class="form-input">
                                <input id="waktu_mulai" placeholder="Waktu Mulai" type="timestamp" class="form-input{{ $errors->has('waktu_mulai') ? ' is-invalid' : '' }}" name="waktu_mulai" value="{{ old('waktu_mulai') }}" required autofocus>

                                @if ($errors->has('waktu_mulai'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('waktu_mulai') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                          <!-- <form action="#" class="subscribe-form">
                            <div class="form-group d-flex">
                              <input type="integer" class="form-control" placeholder="Masukkan jumlah sepeda maks 3">
                              <input type="#" value="Pinjam" class="submit px-3">
                            </div>
                          </form> -->
                  </div>           
                 
             
  <!-- <label for="appt-time">Waktu mulai (buka jam 9:00 to 17:00): </label> -->
  <!-- <div class="col-md-6 ftco-animate">
  <h2 class="subheading"> Waktu Mulai</h2>
  <input id="appt-time" type="time" name="appt-time"
         min="9:00" max="17:00">
  <span class="validity"></span> -->

                  </div>
                  <!-- <div class="form-group row">
                            <label for="waktu_mulai" class="col-md-4 col-form-label text-md-right">{{ __('Waktu Penyewaan') }}</label>

                            <div class="col-md-6">
                                <input id="waktu_mulai" type="timestamp" class="form-control{{ $errors->has('waktu_mulai') ? ' is-invalid' : '' }}" name="waktu_mulai" value="{{ old('waktu_mulai') }}" required autofocus>

                                @if ($errors->has('waktu_mulai'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('waktu_mulai') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                  <!-- <div class="col-md-6 pl-md-5 ftco-animate">
                    <div id="timer" class="d-flex mb-3">
                     <input id="appt-time" type="time" name="appt-time" min="9:00" max="17:00">
                    <span class="validity"></span> -->
                      <!-- <div class="time" id="days"></div>
                      <div class="time pl-4" id="hours"></div>
                      <div class="time pl-4" id="minutes"></div>
                      <div class="time pl-4" id="seconds"></div>
                    </div>
                    <input id="appt-time" type="time" name="appt-time" min="9:00" max="17:00">
                    <span class="validity"></span>
                    </div>
                    <p><a class="btn btn-primary px-4 py-2">Waktu Mulai</a></p>
                  </div> -->
                </div>
              </div>
            </section>
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

              <!-- <div class="form-group row">
                            <label for="jenis" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Sepeda') }}</label>

                            <div class="col-md-6">
                                <label><input type="radio" name="jenis" value="bmx"> BMX </label>
			                    <label><input type="radio" name="jenis" value="fixie"> Fixie </label>
                                <label><input type="radio" name="jenis" value="phoenix"> Phoenix </label>
                                <label><input type="radio" name="jenis" value="mec"> MEC </label>
                                <label><input type="radio" name="jenis" value="onthel"> Onthel </label>
                                <label><input type="radio" name="jenis" value="tigaroda"> 3Roda </label>
                                @if ($errors->has('jenis'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jenis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
                    <label>
                        <input type="radio" name="jenis" value="bmx">
                        <img src="">
                      </label>
            			<!-- <span class="day">18</span>
            			<span class="mos">January</span>
            			<span class="yr">2019</span> -->
              	</div>
              	<div class="desc p-4">
	                <h3 class="heading mt-2"><a href="#">BMX</a></h3>
	                <p>Mongoose Legion L20 20 BMX Bike.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('bkayuh/images/jenis_4.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
                    <label>
                        <input type="radio" name="jenis" value="phoenix">
                        <img src="">
                      </label>
            			<!-- <span class="day">15</span>
            			<span class="mos">January</span>
            			<span class="yr">2019</span> -->
                </div>
              	<div class="desc p-4">
	                <h3 class="heading mt-2"><a href="#">Phoenix</a></h3>
	                <p>Ultimate R98 Phoenix Bike.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('bkayuh/images/jenis_4.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
                    <label>
                        <input type="radio" name="jenis" value="onthel">
                        <img src="">
                      </label>
            			<!-- <span class="day">14</span>
            			<span class="mos">January</span>
            			<span class="yr">2019</span> -->
              	</div>
              	<div class="desc p-4">
	                <h3 class="heading mt-2"><a href="#">Onthel</a></h3>
	                <p>Traditional Onthel Javanese Bike.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('bkayuh/images/jenis_4.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
                    <label>
                        <input type="radio" name="jenis" value="mec">
                        <img src="">
                      </label>
            			<!-- <span class="day">18</span>
            			<span class="mos">January</span>
            			<span class="yr">2019</span> -->
              	</div>
              	<div class="desc p-4">
	                <h3 class="heading mt-2"><a href="#">MEC</a></h3>
	                <p>Multi Evolutionaire Cool Bike.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('bkayuh/images/jenis_6.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
                    
                    <label>
                      <input type="radio" name="jenis" value="fixie" checked>
                      <img src="">
                    </label>
                    
            			<!-- <span class="day">15</span>
            			<span class="mos">January</span>
                  <span
                   class="yr">2019</span> -->
              	</div>
              	<div class="desc p-4">
	                <h3 class="heading mt-2"><a href="#">Fixie</a></h3>
	                <p>Martello Brooklyn Blue Fixie.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('bkayuh/images/jenis_6.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
              	<div class="topper text-center pt-4 px-3">
                    
                    <label>
                      <input type="radio" name="jenis" value="3roda" checked>
                      <img src="">
                    </label>

                    
          
            			<!-- <span class="day">14</span>
            			<span class="mos">January</span>
            			<span class="yr">2019</span> -->
              	</div>
              	<div class="desc p-4">
	                <h3 class="heading mt-2"><a href="#">3Roda</a></h3>
	                <p>Elite 3Roda Three Wheels Bike.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @if ($errors->has('jenis'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jenis') }}</strong>
                                    </span>
                                @endif
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <!-- ini slider tapi off-in dulu aj -->
              <!-- <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&gt;</a></li>
              </ul> -->

              <!-- <p><a href="{{ route('loginPenyewa') }}" class="submit-link submit">Penyewa</a> <a href="{{ route('loginAdmin') }}" class="submit-link submit">Admin</a></p>
              
              <p><a href="notifikasi.html" class="btn btn-primary px-4 py-2">SEWA</a></p>
              <button type="submit" class="btn btn-primary">
                                    {{ __('Sewa') }}
                                </button> -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary px-4 py-2">
                                    {{ __('Sewa') }}
                                </button>

                                <!-- <input type="submit" name="submit" id="submit" class="form-submit submit" value="Sign up"/> -->
                                <!-- <a href="{{ route('register') }}" class="submit-link submit">Daftar</a> -->
                            </div>
                </form>
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


  <script src="{{asset('bkayuh/js/jquery.min.js')}}"></script>
  <script src="{{asset('bkayuh/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('bkayuh/js/popper.min.js')}}"></script>
  <script src="{{asset('bkayuh/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('bkayuh/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('bkayuh/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('bkayuh/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('bkayuh/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('bkayuh/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('bkayuh/js/aos.js')}}"></script>
  <script src="{{asset('bkayuh/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('bkayuh/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('bkayuh/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('bkayuh/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('bkayuh/js/google-map.js')}}"></script>
  <script src="{{asset('bkayuh/js/main.js')}}"></script>
    
  </body>
</html>