<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin </title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="cari..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i> -->
                                </button>
                            </form>
                                            <div class="account-dropdown__item">
                                                    <a href="editsepeda">
                                                        <i class="zmdi zmdi-settings"></i>Data Sepeda</a>
                                            </div>
                                                <div class="account-dropdown__item">
                                                    <a href="riwayat">
                                                        <i class="zmdi zmdi-money-box"></i>Riwayat</a>
                                                </div>

                             <div class="account-dropdown__footer">
                                <a href='{{ url("/login") }}'>
                                 <i class="zmdi zmdi-power"></i>Keluar</a>
                            </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview"
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Daftar sewa</h2>
                                <div class="table-responsive table--no-card m-b-100">
                                    <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                   
                                   <th>Nama Pengguna</th>
                                   <th>ID Penyewaan </th>
                                   <th>Waktu Mulai</th>
                                   <th>Durasi (jam)</th>
                                   <th>Biaya</th>
                                   <th>Status</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($penyewaans as $p)
                               <tr>
                                   <td>{{{ $p->emailn}}}</td>
                                   <td>{{{ $p->id_penyewaan}}}</td>
                                   <td>{{{ $p->waktu_mulai}}}</td>
                                   <td>{{{ $p->durasi}}}</td>
                                   <td>{{{ $p->bayar}}}</td>
                                   <td>
                                       <div class="btn-group">
                   <!-- <a href="http://localhost/divinProject/multi-auth/public/login/admin/konfirmasi/lunas/{{$p->id_penyewaan}}" class="btn btn-primary">Lunas</a> -->
                                           <a href="http://localhost/divinProject/multi-auth/public/konfirmasi/lunas/{{$p->id_penyewaan}}" class="btn btn-primary" value=$id_penyewaan>Lunas</a>
                   <!-- konfirmasi/lunas/{b}','AdminController@store') -->
                                       </div>
                                   </td>
                               </tr>
                           @endforeach   

                                        <!-- <tbody>
                                        <tr>
                                                        <td>2018-09-29 05:57</td>
                                                        <td>Mobile</td>
                                                        <td>iPhone X 64Gb Grey</td>
                                                        <td class="process">Processed</td>
                                                        <td >100.000</td>

                                                        <td> 
                                                        <div class='btn-group'> <a href=" " class ="btn btn-primary"> Lunas </a>
                                                        </div></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-28 01:22</td>
                                                        <td>Mobile</td>
                                                        <td>Samsung S8 Black</td>
                                                        <td class="process">Processed</td>
                                                        <td>$756.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-27 02:12</td>
                                                        <td>Game</td>
                                                        <td>Game Console Controller</td>
                                                        <td class="denied">Denied</td>
                                                        <td>$22.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-26 23:06</td>
                                                        <td>Mobile</td>
                                                        <td>iPhone X 256Gb Black</td>
                                                        <td class="denied">Denied</td>
                                                        <td>$1199.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-25 19:03</td>
                                                        <td>Accessories</td>
                                                        <td>USB 3.0 Cable</td>
                                                        <td class="process">Processed</td>
                                                        <td>$10.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-29 05:57</td>
                                                        <td>Accesories</td>
                                                        <td>Smartwatch 4.0 LTE Wifi</td>
                                                        <td class="denied">Denied</td>
                                                        <td>$199.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-24 19:10</td>
                                                        <td>Camera</td>
                                                        <td>Camera C430W 4k</td>
                                                        <td class="process">Processed</td>
                                                        <td>$699.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-22 00:43</td>
                                                        <td>Computer</td>
                                                        <td>Macbook Pro Retina 2017</td>
                                                        <td class="process">Processed</td>
                                                        <td>$10.00</td>
                                                    </tr>
                                        </tbody> -->
                                    </table>
                                </div>
                            </div>
                            
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 BogorKayuh. All rights reserved. Template by <a href="https://colorlib.com">BogorKayuh</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div> -->

    </div>
<!-- Jquery JS-->
<script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
