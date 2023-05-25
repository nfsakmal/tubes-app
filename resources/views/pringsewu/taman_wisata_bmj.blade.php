@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/ps3.jpg" class="rounded" alt="Taman wisata BMJ" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Taman wisata BMJ</h1>
      <h2>Alamat : Wonodadi, Kec. Gading Rejo, Pringsewu, Lampung 35367</h2>
      <p>
        Taman Wisata BMJ merupakan Salah satu tempat wisata di Gadingrejo Pringsewu 
        yang cukup terkenal adalah Taman BMJ yang lokasinya berdekatan dengan Taman 
        Sabin. Kampung Bina Jaya Mandiri (BMJ), tempat wisata ini telah dibuka 
        sejak beberapa waktu lalu dan menjadi salah satu alternatif liburan keluarga 
        di Pringsewu.
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