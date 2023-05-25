@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lti4.jpg" class="rounded" alt="Danau Kemuning" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Danau Kemuning</h1>
      <h2>Alamat : Desa Sribhawono, Kecamatan Bandar Sribhawono, Kabupaten Lampung Timur, Provinsi Lampung.</h2>
      <p>
        Danau Kemuning sendiri memiliki beberapa spot menarik untuk berfoto dengan view 
        danau yang jernih. Salah satunya pengunjung bisa berfoto di atas rumah 
        pohon, foto dengan patung badak dan beberapa spot foto lainnya.
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