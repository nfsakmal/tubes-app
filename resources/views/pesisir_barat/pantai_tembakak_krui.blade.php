@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/pb3.jpg" class="rounded" alt="Pantai Tembakak Krui" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Pantai Tembakak Krui</h1>
      <h2>Alamat : Jl. Lintas Barat Sumatera, Way Sindi Utara, Kec. Karya Penggawa, Kabupaten Pesisir Barat, Lampung</h2>
      <p>
        Pantai Tembakak Krui Lampung merupakan satu provinsi penting sebagai gerbang dari 
        Pulau Sumatera bagian Selatan. Sebagai provinsi terdepan, Lampung juga dikenal sebagai 
        tempat yang mempunyai pesisir pantai yang indah tentunya selain komoditas Kopi, 
        Pisang dan Tapis Lampungnya.
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