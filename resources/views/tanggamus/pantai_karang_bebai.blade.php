@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/t5.jpg" class="rounded" alt="Pantai Karang Bebai" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Pantai Karang Bebai</h1>
      <h2>Alamat : Tengor, Kec. Cukuh Balak, Kabupaten Tanggamus, Lampung</h2>
      <p>
        Pantai ini terletak di Pekor Tengor, Kecamatan Cukuh Balak, Kabupaten Tanggamus, 
        Lampung. Saat Anda berkunjung di sana akan menemukan berbagai pantai yang 
        masih alami dan enak dipandang mata. Lokasi pantai tersebut berada di 
        91 km dari Terminal Rajabasa Bandar Lampung.
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