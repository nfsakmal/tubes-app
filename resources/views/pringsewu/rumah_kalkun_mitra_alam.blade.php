@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/ps1.jpg" class="rounded" alt="Rumah Kalkun Mitra Alam" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Rumah Kalkun Mitra Alam</h1>
      <h2>Alamat : Sukoharjo I, Sukoharjo, Pringsewu Regency, Lampung 35373</h2>
      <p>
        Kalkun merupakan sejenis unggas yang dikembangbiakkan untuk dimanfaatkan dagingnya sebagai sumber 
        konsumsi daging oleh sebagian peternak di Kabupaten Pringsewu. Hanya saja budidaya 
        atau peternakan ayam jenis ini belum seperti ayam jenis petelur dan 
        jenis pedaging. Secara umum perkandangan kalkun sama dengan perkandangan ayam namun 
        karena bobot badan kalkun yang lebih besar daripada ayam biasa sehingga 
        kepadatan kandang kalkun berbeda dengan kandang ayam jenis lain.
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