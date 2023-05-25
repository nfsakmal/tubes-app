@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/p3.jpg" class="rounded" alt="Air Terjun Ciupang" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Air Terjun Ciupang</h1>
      <h2>Alamat : Dusun Purwajaya, Kecamatan Padang Cermin, Pesawaran</h2>
      <p>
        Air Terjun Ciupang merupakan salah satu air terjun yang dapat dikenal 
        juga dengan nama Curup Ciupang ini menyuguhkan pemandangan yang masih sangat 
        alamin. Air Terjun ini memiliki tatanan bebatuan yang bisa digunakan untuk memanjat, 
        namun tetap harus berhati-hati karena masih banyak bebatuan yang ditumbuhi lumut hijau 
        yang licin.
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