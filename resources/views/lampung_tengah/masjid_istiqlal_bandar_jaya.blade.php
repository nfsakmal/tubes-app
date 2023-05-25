@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lt1.jpg" class="rounded" alt="Masjid Istiqlal Bandar Jaya" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Masjid Istiqlal Bandar Jaya</h1>
      <h2>Alamat : alur Timur Sumatra, tepatnya berada di Jl Proklamator Raya, ds Bandar Jaya, Kec Terbanggi Besar, Kab Lampung Tengahn</h2>
      <p>
       Masjid Istiqlal Bandar Jaya menjadi tempat ibadah paling populer dan 
       paling favorit semua orang tanpa terkecuali. Hal ini disebabkan
       karena adanya beberapa fasilitas yang sangat memadai. Mulai dari permainan 
       fasilitas intern maupun ekstern.
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