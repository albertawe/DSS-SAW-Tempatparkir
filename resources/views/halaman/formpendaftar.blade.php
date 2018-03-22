@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close btn-round" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>

    {{ Session::get('flash_message') }}
</div>
</div>
@endif

<div align="center">
    <h2>FORM PENAMBAHAN DATA TEMPAT PARKIR</h2>
    <br>
</div>

<div align="center">
<form action="{{ url('/daftar') }}" method="post" style="width: 50%">
<div align="left">
  <div>
    Nama <br>
    <input class="form-control" type="text" name="nama" required="required">
  </div>
  <div>
    Biaya Parkir <br>
      <select class="form-control"  required="required" name="biaya">
        <option value="5">3000</option>
        <option value="4">6000</option>
        <option value="3">9000</option>
        <option value="2">12000</option>
        <option value="1">15000</option>
      </select>
  </div>
  <br>
  <div>
    Cuaca <br>
      <select class="form-control"  required="required" name="cuaca">
        <option value="5">Cerah</option>
        <option value="4">Berawan</option>
        <option value="3">Mendung</option>
        <option value="2">Gerimis</option>
        <option value="1">Hujan</option>
      </select>
  </div>
  <br>
  <div>
    Luas Tempat Parkir <br>
      <select class="form-control"  required="required" name="luas">
        <option value="1"> kurang dari 30 mobil </option>
        <option value="2">30 < mobil < 80</option>
        <option value="3">80 < mobil < 130</option>
        <option value="4">130 < mobil < 180</option>
        <option value="5">lebih dari 180 mobil</option>
      </select>
  </div>
  <br>
  <div>
    Jarak Tempat Parkir dari kampus<br>
      <select class="form-control"  required="required" name="jarak">
        <option value="5"> kurang dari 100 meter </option>
        <option value="4">100 < meter < 200</option>
        <option value="3">200 < meter < 300</option>
        <option value="2">300 < meter < 400</option>
        <option value="1">lebih dari 400 meter</option>
      </select>
  </div>
  <br>
  <div>
    Waktu Parkir<br>
      <select class="form-control"  required="required" name="waktu">
        <option value="5"> 07.00 - 09.00 </option>
        <option value="4"> 09.00 - 12.00</option>
        <option value="3"> 12.00 - 15.00</option>
        <option value="2"> 15.00 - 18.00</option>
        <option value="1"> 18.00 - 21.00 </option>
      </select>
  </div>
  <div style="float:right; margin-bottom:30px;">
    <br>
    <input type="submit" class="btn btn-success" value="Submit" name="submit">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  </div>
  </div>
</form>
</div>


@endsection
