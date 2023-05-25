@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/pb1.jpeg" class="rounded" alt="Labuhan Jukung" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Labuhan Jukung</h1>
      <h2>Alamat : Kampung Jawa, Pesisir Tengah, West Lampung Regency, Lampung 34874</h2>
      <p>
        Berlokasi di Pekon Kampung Jawa, Kecamatan Pesisir Tengah. Kawasan wisata ini 
        sangat diminati oleh wisatawan domestik dan asing karena memiliki panorama alam 
        yang indah, ombak yang cukup mengasyikkan bagi para peselancar, nyaman bagi 
        setiap aktivitas pantai, serta memiliki fasilitas penunjang yang layak.
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