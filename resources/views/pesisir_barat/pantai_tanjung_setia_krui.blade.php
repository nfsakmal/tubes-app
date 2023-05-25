@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/pb2.jpg" class="rounded" alt="Pantai Tanjung Setia Krui" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Pantai Tanjung Setia Krui</h1>
      <h2>Alamat : W Trans Sumatera Hwy, Way Jambu, South Pesisir, South Pesisir Regency, Lampung 34875</h2>
      <p>
        Tanjung Setia Beach merupakan sebuah pantai yang terletak di Desa Tanjung 
        Setia, Kecamatan Pesisir Barat, Kabupaten Lampung Barat, Provinsi Lampung menjadikan Pantai 
        ini lumayan jauh dari pusat kota Bandar Lampung.Untuk menuju 
        kesana membutuhkan perjalanan sekitar 5 hingga 8 jam dari Pusat Kota 
        Bandar Lampung. Selama perjalanan akan ditemui jalan yang berliku dengan berbentuk 
        lereng dengan tanjakan dan turunan.
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