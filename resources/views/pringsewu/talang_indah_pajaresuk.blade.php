@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/ps4.jpg" class="rounded" alt="Talang Indah Pajaresuk" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Talang Indah Pajaresuk</h1>
      <h2>Alamat : JL. Wisata Talang Indah, Fajar Esuk, Kec. Pringsewu, Kabupaten Pringsewu, Lampung 35373</h2>
      <p>
        Talang Air Pringsewu ini merupakan jaringan irigasi pertanian yang juga dimanfaatkan 
        sebagai jembatan penyeberangan yang menghubungkan antara irigasi di bukit yang satu 
        dengan irigasi di bukit yang lain. Pengunjung dapat melewati Talang Air 
        Pringsewu karena di atas talang air berbentuk setengah silinder ini diletakkan 
        besi-besi melintang.
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