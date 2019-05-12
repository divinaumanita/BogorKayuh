@extends('layouts.auth')
<!-- HEADER DESKTOP-->
<header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="cari..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->
                            </form>
                            <div style="text-align:right;">
                            <a href="{{ route('admin') }}" class="btn btn-default">Kembali</a>
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
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Sepeda</div>
                
            </div>
        </div>
    </div>
</div>
@endsection
                    <form action="http://localhost/divinProject/multi-auth/public/sepeda/store" method="post">
                                    {{ csrf_field() }}
                                
                                        <strong>Nomor Sepeda:</strong>
                                        <input type="string" name="no_sepeda" class="form-control" required="required">
                                
                                        <strong>Jenis Sepeda:</strong>
                                        <input type="string" name="jenis" class="form-control" required="required">
                                                          
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <!-- <a href="{{ route('admin') }}" class="btn btn-default">Kembali</a> -->
                                    </div>
                                    
                        </form>
                        <table class="table table-bordered table-hover ">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Jenis</th>
                                        <th>Jumlah </th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($sepedas as $b)
                                    <tr>
                                        <td>{{{ $b->no_sepeda}}}</td>
                                        <td>{{{ $b->jenissepeda }}}</td>
                                        <td>{{{ $b->jumlahsepeda }}}</td>
                                        <td>
                                            <div class="btn-group">
                        <a href="http://localhost/divinProject/multi-auth/public/sepeda/hapus/{{$b->no_sepeda}}" class="btn btn-primary">Hapus</a>
                        </div>
                                        </td>
                                    </tr>
                                @endforeach   
