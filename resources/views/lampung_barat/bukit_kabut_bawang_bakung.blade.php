@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lb2.jpg" class="rounded" alt="Bukit Kabut Bawang Bakung" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Bukit Kabut Bawang Bakung</h1>
      <h2>Alamat : Negeri Ratu, Batu Brak, West Lampung Regency</h2>
      <p>
        Bukit Kabut Bawang Bakung merupakan destinasi wisata yang menawarkan suasa wisata 
        camping diatas bukit, berburu kabut, matahari terbit, dan dapat berfoto dengan 
        bacground gunung tertinggi yang ada di Lampung.
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