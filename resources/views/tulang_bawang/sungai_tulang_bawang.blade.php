@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/tb3.jpg" class="rounded" alt="Sungai Tulang Bawang" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Sungai Tulang Bawang</h1>
      <h2>Alamat : Gedung Bandar Rahayu, Kec. Gedung Meneng, Kab. Tulang Bawang, Lampung</h2>
      <p>
        Sungai Tulangbawang atau biasa disebut sebagai Way Tulangbawang, adalah sungai terpanjang 
        keempat di Provinsi Lampung, Indonesia. Dengan luas daerah tangkapan air mencapai 
        1.285 km², sungai ini pun mendominasi bentang alam Kabupaten Tulangbawang dan 
        melintasi ibu kota kabupaten tersebut, yakni Menggala.
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