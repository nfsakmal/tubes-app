@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/p2.jpg" class="rounded" alt="Pulau Kelagian" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Pulau Kelagian</h1>
      <h2>Alamat : Tenggara Teluk Ratai, Kabupaten Pesawaran</h2>
      <p>
        Pulau Kelagian merupakan salah satu pulau yang tak berpenghuni dengan rindangnya 
        pepohonan dan birunya lautan dibatasi pasir putih membentang. Pulau ini terdiri 
        dari Pulau Kelagian Besar dan Pulau Kelagian Kecil. 
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