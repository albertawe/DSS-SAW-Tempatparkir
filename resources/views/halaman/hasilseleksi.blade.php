@extends('layouts.app')

@section('content')

<style type="text/css">

    table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){}

th {
    background-color: #black;
    color: w;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <!--    <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body">
                    <div>
                    <h5><strong>Hasil Seleksi (Kriteria x Bobot)</strong> </h5>
                    </div>
                    <table>
                    <tr>
                      <th>Nama Tempat Parkir</th>
                      <th>Biaya Parkir</th>
                      <th>Kondisi Cuaca</th>
                      <th>Luas tempat pemarkiran</th>
                      <th>Jarak dari kampus</th>
                      <th>Waktu Parkir</th>
                      <th>Jumlah</th>
                    </tr>

                    @for($i=0;$i<=4;$i++)
                    @if(isset($nama[$i]))
                    <tr>

                        <td>{{$nama[$i]}}</td>
                        <td>{{$biaya[$i]}}</td>
                        <td>{{$cuaca[$i]}}</td>
                        <td>{{$luas[$i]}}</td>
                        <td>{{$jarak[$i]}}</td>
                        <td>{{$waktu[$i]}}</td>
                        <td>{{$jumlah[$i]}}</td>

                    </tr>
                   @endif
                    @endfor
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
