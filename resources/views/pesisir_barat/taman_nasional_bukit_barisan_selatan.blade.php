@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/pb4.jpg" class="rounded" alt="Taman Nasional Bukit Barisan Selatan" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Taman Nasional Bukit Barisan Selatan</h1>
      <h2>Alamat : Jl. Kota Agung - Bengkunat, Way Kerap, Semaka, Kabupaten Tanggamus, Lampung 34875</h2>
      <p>
        Taman Nasional Bukit Barisan Selatan (disingkat TNBBS) adalah sebuah taman nasional 
        yang ditujukan untuk melindungi hutan hujan tropis pulau Sumatra beserta kekayaan 
        alam hayati yang dimilikinya. UNESCO menjadikan Taman Nasional Bukit Barisan Selatan 
        bersama Taman Nasional Gunung Leuser dan Tamana Nasional Kerinci Seblat sebagai 
        Warisan Dunia dalam Warisan Hutan Hujan Tropis Sumatra.
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