@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/bl4.jpg" class="rounded" alt="Al-Furqon Grand Mosque" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Al-Furqon Grand Mosque</h1>
      <h2>Alamat : JI. Diponegoro, Gulak Galik, Kec. Tik.Betung Utara, Kota Bandar Lampung, Lampung 35212</h2>
      <p>
       Masjid Agung Al Furqon Bandar Lampung yang merupakan masjid terbesar di 
       Provinsi Lampung dengan arsitektur yang megah dan dapat menampung kurang lebih 
       6.000 jamaah.
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