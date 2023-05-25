@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/tb1.jpg" class="rounded" alt="Islamic Center Tulang Bawang Barat" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Islamic Center Tulang Bawang Barat</h1>
      <h2>Alamat : Jl. Raya Panaragan Jaya - Pulung Kencana, Panaragan Jaya, Kec. Tulang Bawang Tengah, Kab. Tulang Bawang Barat, Lampung 34693</h2>
      <p>
        Memiliki desain yang unik tanpa kubah serta interior yang berbeda dari Islamic 
        Center lainnya, menjadikan Islamic Center Tulang Bawang Barat merupakan salah satu 
        yang termegah di Lampung. Sebagai komplek kegiatan keagamaan yang memiliki nama
        “Komplek Dunia Akhirat” ini sering didatangani oleh wisatawan domestik serta dari luar daerah.
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