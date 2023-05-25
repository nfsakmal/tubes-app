@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lt4.jpg" class="rounded" alt="Kolam Renang Telaga Putri" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Kolam Renang Telaga Putri</h1>
      <h2>Alamat : JL Seputih Banyak, SB14, Lampung Tengah, Lampung</h2>
      <p>
        Namanya kolam renang Telaga Putri yang berada di kabupaten Lampung 
        Tengah, Kota Metro. Tentu saja untuk Anda yang akan berlibur 
        ke Lampung ya. Kolam renang ini cepat dikenal banyak  orang 
        lantaran harga tiket masuknya yang cukup murah dibanding tempat lain 
        bahkan dengan fasilitas yang sama.
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