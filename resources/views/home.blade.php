@extends('layouts.app')

@section('content')

   <div style="margin-top: 20px; margin-left: 100px; margin-right: 100px" align="center">

<div class="row text-center" align="center">

<div><h2>MENU UTAMA</h2>
<hr>
</div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="https://png.icons8.com/windows/1600/list.png" alt="" style="width: 351px; height: 219.367px;">
                    <div class="caption">
                        <h3>Data List Tempat Parkir</h3>
                        <p>
                            <a href="{{url('/data')}}" class="btn btn-primary">Mulai</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="https://d27p8o2qkwv41j.cloudfront.net/wp-content/uploads/2017/10/shutterstock_521926666-e1508347182482.jpg" alt="" style="width: 351px; height: 219.367px;">
                    <div class="caption">
                        <h3>Seleksi tempat parkir terbaik</h3>
                        <p>
                            <a href="{{url('seleksi')}}" class="btn btn-primary">Mulai</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="https://png.icons8.com/windows/1600/add-list.png" alt="" style="width: 351px; height: 219.367px;">
                    <div class="caption">
                        <h3>Tambah Tempat Parkir</h3>
                        <p>
                            <a href="{{url('/form')}}" class="btn btn-primary">Mulai</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        </div>
@endsection
