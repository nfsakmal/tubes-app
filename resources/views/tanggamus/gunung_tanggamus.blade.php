@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/t3.jpg" class="rounded" alt="Gunung Tanggamus" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Gunung Tanggamus</h1>
      <h2>Alamat : Kecamatan Kota Agung, Kabupaten Tanggamus, Provinsi Lampung, Indonesia</h2>
      <p>
        Gunung ini memiliki panorama yang sangat menarik. salah satu panorama yang 
        menjadi favorit yaitu panorama teluk semangka secara keseluruhan melalui puncaknya. Selain 
        itu gunung ini juga unik dan memiliki tantangan tersendiri. Menuju lokasi 
        itu saja sudah punya cerita khusus, apalagi jalur pendakian ke tempat 
        peristirahatan pertama hingga puncak.
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