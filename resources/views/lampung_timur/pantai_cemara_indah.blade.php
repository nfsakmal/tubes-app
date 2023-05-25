@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lti2.jpg" class="rounded" alt="Pantai  Cemara Indah" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Pantai  Cemara Indah</h1>
      <h2>Alamat : Bandar Negeri, Labuhan Maringgai, East Lampung Regency, Lampung.</h2>
      <p>
        Pantai Cemara adalah salah satu wisata pantai yang ada di daerah 
        Bandar Negeri, Lampung Timur. Panorama pantai yang indah menyuguhkan beberapa ekosistem 
        air yang masih asri. Terdapat beberapa fauna dan flora yang dapat 
        kita jumpai di sana. Banyak spesies burung migran yang kerap kita 
        temui di sana pada saat transimigrasi.
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