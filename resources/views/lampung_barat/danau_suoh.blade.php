@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lb4.png" class="rounded" alt="Danau Suoh" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Danau Suoh</h1>
      <h2>Alamat : Dusun Kalibata, Desa Suamarga, Kecamatan Suoh, Kabupaten Lampung Barat</h2>
      <p>Danau Suoh merupakan salah satu wisata Suoh yang memiliki air 
         jernih dengan luas 65 hektare dan danau ini terdapat sebuah 
         pulau yang berada ditengah danau.
      </p>
      <a href="/" class="btn btn-info" role="button">Kembali Ke Beranda</a>
    </div>
  </div>
</div>

<style>
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>

@endsection