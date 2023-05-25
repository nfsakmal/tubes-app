@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/ls2.jpg" class="rounded" alt="Air Terjun Way Kalam" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Air Terjun Way Kalam</h1>
      <h2>Alamat : Kaki Gunung Rajabasa, Desa Way Kalam, Kecamatan Penegahan, Kabupaten lampung Selatan</h2>
      <p>
        Air Terjun Way Kalam merupakan salah satu wisata dengan keindahan 
        alam di wilayah Gerbang Sumatera, dan memiliki keindahan sepanjang perjalan 
        menuju Air Terjun dengan pemandangan pepohonan dan bebatuan tebing.
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