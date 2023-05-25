@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/pb5.jpg" class="rounded" alt="Pulau Pisang" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Pulau Pisang</h1>
      <h2>Alamat : Kecamatan Pulau Pisang Kabupaten Pesisir Barat</h2>
      <p>
        Pulau Pisang adalah salah satu pulau paling barat di Provinsi Lampung 
        dan langsung menghadap Samudra Hindia. Pulau ini merupakan kecamatan tersendiri yang 
        masuk ke dalam wilayah Kabupaten Pesisir Barat, Provinsi Lampung. Pulau seluas 
        sekitar 2.310 hektar ini menyuguhkan keindahan pantai yang sangat menakjubkan. Dengan 
        pasir pantai yang putih halus dan bersih, Pantai Pulau Pisang akan 
        membuat anda betah dan nyaman berlama-lama menikmati pemandangan laut yang luas diiringi 
        hembusan angin sepoi-sepoi khas pantai.
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