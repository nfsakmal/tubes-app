@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/bl5.jpeg" class="rounded" alt="Bukit AsLan" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Bukit AsLan</h1>
      <h2>Alamat : JI. Bukit Aslan No.2, Way Gubak, Sukabumi, Bandar Lampung City, Lampung 35244</h2>
      <p>
       Bukit Aslan adalah sebuah tempat wisata seluas sekitar 10 hektar di 
       ketinggian Bukit Way Gubak Kota Bandar Lampung. Menyuguhkan pemandangan Kota Bandar Lampung,
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