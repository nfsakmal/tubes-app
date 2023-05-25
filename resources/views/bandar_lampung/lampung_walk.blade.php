@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/bl1.jpg" class="rounded" alt="Lampung Walk" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Lampung Walk</h1>
      <h2>Alamat : Jl. Pulau Batam No.10, 35133, Bandar Lampung</h2>
      <p>
       Lampung Walk hadir dengan konsep one stop family entertainment. Di sini 
       terdapat pusat hiburan, olahraga, serta pusat kuliner yang cocok menjadi 
       tujuan wisata keluarga.
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