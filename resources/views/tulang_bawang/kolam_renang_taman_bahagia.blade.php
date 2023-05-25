@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/tb5.jpg" class="rounded" alt="Kolam Renang Taman Bahagia" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Kolam Renang Taman Bahagia</h1>
      <h2>Alamat : Cemp. Dalam, Kec. Menggala Tim., Kab. Tulang Bawang, Lampung</h2>
      <p>
        Kolam renang taman bahagia menggala timur, tulang bawang, merupakan tempat rekreasi 
        wahana air yang sangat bagus untuk keluarga. Ada beberapa kolam renang 
        Dimulai untuk ukuran balita, anak anak sampai dewasa (untuk dewasa ada 
        kolam kedalamaan 2 m dan 2,5 m).
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