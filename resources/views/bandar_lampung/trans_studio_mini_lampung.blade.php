@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/bl3.jpg" class="rounded" alt="Trans Studio Mini Lampung" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Trans Studio Mini Lampung</h1>
      <h2>Alamat : JI. Soekarno Hatta, Way Dadi, Kec. Sukarame, Kota Bandar Lampung, Lampung 35133</h2>
      <p>
        Dengan konsep taman hiburan, Trans Studio menjadi pilihan tepat untuk rekreasi 
        bersama keluarga, anak-anak, ataupun sahabat. lokasinya yang berada di Mall 
        Transmart. Terdapat puluhan wahana permainan yang bisa dinikmati di Trans Studio 
        Bandar Lampung. Semua pengunjung dari segala usia bisa turut bermain karena 
        ada wahana khusus untuk balita, anak-anak, hingga dewasa. 
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