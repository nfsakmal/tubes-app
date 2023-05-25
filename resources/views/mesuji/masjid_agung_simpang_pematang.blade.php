@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/m1.jpg" class="rounded" alt="Masjid Agung Simpang Pematang" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Masjid Agung Simpang Pematang</h1>
      <h2>Alamat : Simpang Pematang, Mesuji Regency, Lampung 34698</h2>
      <p>
        Masjid terbesar di daerah simpang pematang. Halamannya luas, dapat memuat banyak 
        kendaraan. Di beberapa spot juga ada pohon pelindung untuk berteduh.
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