@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/ls5.jpg" class="rounded" alt="Pulau Sebesi" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Pulau Sebesi</h1>
      <h2>Alamat : Desa Tejang Kecamatan Rajabasa, Kabupaten Lampung Selatan</h2>
      <p>
        Pulau Sebesi merupakan salah satu pulau yang dikembangkan menjadi daerah 
        tujuan wisata andalan Lampung Selatan selain Pulau Krakatau, serta memiliki 
        bukit yang biasa disebut Gunung Sebesi yang memiliki tinggi 844 
        mdpl dan pantai yang asri dengan pemandagan indah pulau-pulau sekelilingnya.
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