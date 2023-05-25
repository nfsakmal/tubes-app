@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/ls3.jpg" class="rounded" alt="Pulau Mengkudu" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Pulau Mengkudu</h1>
      <h2>Alamat : Desa Totoharjo, Kecamatan Bakauheni, Kabupaten Lampung Selatan</h2>
      <p>
        Pulau Mengkudu merupakan salah satu pulau wisata yang eksotisme dengan 
        keindahan pepohonan, air laut yang jernih bersih dan terdapat berbagai 
        fasilitas yang ditawarkan. 
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