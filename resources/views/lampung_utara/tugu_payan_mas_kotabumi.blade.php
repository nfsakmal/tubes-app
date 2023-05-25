@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lu2.jpg" class="rounded" alt="Tugu Payan Mas Kotabumi" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Tugu Payan Mas Kotabumi</h1>
      <h2>Alamat : Jl. Jend. Sudirman No.139, Kota Gapura, Kec. Kotabumi, Kabupaten Lampung Utara, Lampung 34514.</h2>
      <p>
        Sebuah tugu yang berada di tengah-tengah perempatan ini cukup menyita 
        perhatian masyarakat dengan bentuk tugu yang unik dan penuh filosofi. Tugu 
        payan mas yang bisa diartikan tugu tombak emas ini menjadi salah 
        satu tempat yang wajib dikunjungi saat berada di Kotabumi. Kebanyakan masyarakat 
        yang datang ke daerah ini adalah untuk bersantai atau sekadar 
        nongkrong menikmati sore hari. Cocok juga untuk tempat hangout untuk Anda 
        yang sudah bosan pergi ke mall.
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