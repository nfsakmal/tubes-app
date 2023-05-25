@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/m4.jpg" class="rounded" alt="Sungai Mesuji" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Sungai Mesuji</h1>
      <h2>Alamat : Bumi Dipasena Abadi, Rawajitu Timur, Tulang Bawang Regency, Lampung</h2>
      <p>
        Sungai Mesuji atau biasa disebut sebagai Way Mesuji, adalah sungai terpanjang 
        kedua di Provinsi Lampung, Indonesia. Sebagian sungai ini juga menjadi batas alami 
        antara Provinsi Lampung dan Provinsi Sumatera Selatan.Sungai ini memiliki panjang 
        sekitar 220 kilometer, dengan luas daerah aliran sungai ini mencapai 2.053 km²
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