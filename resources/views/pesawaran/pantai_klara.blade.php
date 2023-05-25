@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/p5.jpg" class="rounded" alt="Pantai Klara" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Pantai Klara</h1>
      <h2>Alamat : Jl. Raya Way Ratay, Gebang, Padang Cermin, Pesawan</h2>
      <p>
        Pantai Klara merupakan singkatan dari Kelapa Rapat sebagai pantai dengan panorama 
        alam yang indah serta air laut yang jernih dan hamparan pasir 
        putih dan ombak yang tenang membuat keindahannya tidak perlu diragukan lagi.
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