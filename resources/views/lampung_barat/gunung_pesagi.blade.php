@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lb5.jpg" class="rounded" alt="Gunung  Pesagi" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Gunung  Pesagi</h1>
      <h2>Alamat : Kecamatan Balik Liwa,Kota Liwa, Kabupaten Lampung Barat</h2>
      <p>
        Gunung Pesagi merupakan salah satu gunung tertinggi di Lampung dengan 
         puncaknya berada diketinggian 2.262 meter diatas permukaan laut dan menjadi 
         jalur pendakian yang ekstrim dan lebih ringan.
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