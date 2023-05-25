@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/bl2.jpg" class="rounded" alt="Taman Wisata Alam & Cottage Wira Garden" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Taman Wisata Alam & Cottage Wira Garden</h1>
      <h2>Alamat : Jl. Wan Abdurrahman, Batu Putuk, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung. 35239</h2>
      <p>
       Wira Garden adalah wisata alam yang letaknya tidak jauh dari pusat 
       kota Bandarlampung. Wira Garden Lampung tidak hanya menyediakan tempat wisata alam 
       untuk rekreasi dan berlibur saja. Di taman wisata ini ada area 
       outdoor yang terhampar luas untuk tempat berkemah.
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