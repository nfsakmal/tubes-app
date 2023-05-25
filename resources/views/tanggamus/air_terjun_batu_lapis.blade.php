@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/t4.jpg" class="rounded" alt="Air Terjun Batu Lapis" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Air Terjun Batu Lapis</h1>
      <h2>Alamat : Jln. Tl. Ogan, Kec. Pulau Panggung, Talang Beringin, Pulau Panggung, Talang Beringin, Kec. Pulau Panggung, Kabupaten Tanggamus, Lampung 35679</h2>
      <p>
        Air Terjun Batu Lapis merupakan salah satu surga keindahan yang tersembunyi 
        di antara sekian banyak potensi wisata yang ada di Kabupaten 
        Tanggamus. Di sekitar air terjun ini terdapat bebatuan yang tersusun alias 
        berlapis-lapis.
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