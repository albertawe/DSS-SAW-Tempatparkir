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

tr:nth-child(even){background-color: #green}

th {
    background-color: #black;
    color: w;
}
</style>



<div align="center" style="margin-left: 10%; margin-right: 10%">

<div>
    <h2>DATA TEMPAT PARKIR</h2>
    <br>
</div>

<div>
                    <table>

                    <tr>
                    <th>Nama Tempat Parkir</th>
                    <th>Biaya Parkir</th>
                    <th>Kondisi Cuaca</th>
                    <th>Luas tempat pemarkiran</th>
                    <th>Jarak dari kampus</th>
                    <th>Waktu Parkir</th>
                    </tr>

                    @foreach($pendaftar as $pendafta)

                    <tr>
                    <td>{{ $pendafta->nama }}</td>
                    <td>
                          @if($pendafta->biaya == "5")

                          Idr 3000

                          @endif

                          @if($pendafta->biaya == "4")

                          Idr 6000

                          @endif

                          @if($pendafta->biaya == "3")

                          Idr 9000

                          @endif

                          @if($pendafta->biaya == "2")

                          Idr 12000

                          @endif

                          @if($pendafta->biaya == "1")

                          Idr 15000

                          @endif

                          </td>
                          <td>
                                @if($pendafta->cuaca == "5")

                                cerah

                                @endif

                                @if($pendafta->cuaca == "4")

                                berawan

                                @endif

                                @if($pendafta->cuaca == "3")

                                mendung

                                @endif

                                @if($pendafta->cuaca == "2")

                                gerimis

                                @endif

                                @if($pendafta->cuaca == "1")

                                hujan

                                @endif

                                </td>
                            <td>
                                      @if($pendafta->luas == "1")

                                      kurang dari 30 mobil

                                      @endif

                                      @if($pendafta->luas == "2")

                                      30 hingga 80 mobil

                                      @endif

                                      @if($pendafta->luas == "3")

                                      80 hingga 130 mobil

                                      @endif

                                      @if($pendafta->luas == "4")

                                      130 hingga 180 mobil

                                      @endif

                                      @if($pendafta->luas == "5")

                                      lebih dari 180 mobil

                                      @endif

                                      </td>
                                      <td>
                                                @if($pendafta->jarak == "1")

                                                lebih dari 400 meter

                                                @endif

                                                @if($pendafta->jarak == "2")

                                                300 hingga 400 meter

                                                @endif

                                                @if($pendafta->jarak == "3")

                                                200 hingga 300 meter

                                                @endif

                                                @if($pendafta->jarak == "4")

                                                100 hingga 200 meter

                                                @endif

                                                @if($pendafta->jarak == "5")

                                                kurang dari 100 meter

                                                @endif

                                                </td>
                                                <td>
                                                          @if($pendafta->waktu == "1")

                                                          18.00 - 21.00

                                                          @endif

                                                          @if($pendafta->waktu == "2")

                                                          15.00 - 18.00

                                                          @endif

                                                          @if($pendafta->waktu == "3")

                                                          12.00 - 15.00

                                                          @endif

                                                          @if($pendafta->waktu == "4")

                                                          09.00 - 12.00

                                                          @endif

                                                          @if($pendafta->waktu == "5")

                                                          07.00 - 09.00

                                                          @endif

                                                          </td>
                    </tr>
                    @endforeach
                    </table>
</div>
</div>
{!!$pendaftar->render()!!}

@endsection
