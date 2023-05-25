@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lb1.jpg" class="rounded" alt="Kebun Raya Liwa" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Kebun Raya Liwa</h1>
      <h2>Alamat : Way Mengaku, Balik Bukit, West Lampung Regency</h2>
      <p>Kebun Raya Liwa merupaka salah satu destinasi wisata andalan di Kabupaten Lampung Barat, tempat ini memiliki banyak aneka tumbuhan mulai dari tanaman hias, buah-buahan, dan jenis tanaman lainnya.
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