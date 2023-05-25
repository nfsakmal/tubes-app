@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lb3.jpg" class="rounded" alt="Gunung  Seminung" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Gunung  Seminung</h1>
      <h2>Alamat : Barat Laut Kota Liwa</h2>
      <p>
        Gunung Seminung merupakan salah satu gunung yang menjadi favorit para 
        pendaki dengan memiliki ketinggian 1.881 meter diatas permukaan laut, saat 
        mendaki pada melihat danau terbesar kedua di Pulau Sumatera yaitu 
        Danau Ranau.
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