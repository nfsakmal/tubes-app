@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lt3.jpg" class="rounded" alt="Tugu Pepadun" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Tugu Pepadun</h1>
      <h2>Alamat : Kampung Gunung Sugih Raya, Kecamatan Gunuug Sugih Kabupaten Lampung Tengah</h2>
      <p>
        Tugu Pepadun merupakan monumen berbntuk Dua Pasang Tangan Penari Tanggai 
        Berlapis Perunggu, menopang singgasana pepadun yang diatasnya dilindungi payung bersusun 
        tiga, masing-masing payung warna putih (atas), payung warna kuning 
        (tengah) dan payung warna merah (atas).
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