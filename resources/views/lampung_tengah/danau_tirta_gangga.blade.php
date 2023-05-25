@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lt2.jpg" class="rounded" alt="Danau Tirta Gangga" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Danau Tirta Gangga</h1>
      <h2>Alamat : Sakti Buana, Kec. Seputih Banyak, Kabupaten Lampung Tengah, Lampung 34157</h2>
      <p>
        Danau ini menyajikan semua suguhan eksotik. Tidak hanya panoramanya saja 
        melainkan, kebudayaan juga menjadi hal yang menarik yang bisa anda 
        jadikan alasan mengapa harus mengunjungi kawasan ini. Bahkan, bila dilihat 
        lebih dalam lagi, Danau Tirta Gangga seperti danau yang berada 
        di pulau Bali.
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