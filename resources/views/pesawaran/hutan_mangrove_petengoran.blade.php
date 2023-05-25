@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/p4.jpg" class="rounded" alt="Hutan Mangrove Petengoran" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Hutan Mangrove Petengoran</h1>
      <h2>Alamat : Desa Gebang, Kecamatan Padang Cermin, Pesawaran</h2>
      <p>
        Hutan Mangrove Petengoran merupakan destinasi wisata edukasi seluas 113 hektar. Sudah 
        dilegalkan dalam Peraturan Desa (Perdes) Nomor 1 Tahun 2016. Kemudian BUMDes 
        Makmur Jaya lah yang mengelolanya mulai tahun 2018.
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