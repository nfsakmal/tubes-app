@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/ls1.jpg" class="rounded" alt="Pantai Marina" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Pantai Marina</h1>
      <h2>Alamat : Desa Merak Belatung, Kecamatan Kalianda, Kabupaten Lampung Selatan
    </h2>
      <p>
        Pantai Marina merupakan salah satu wisata pantai yang dikenal dengan
        batu karang di sepanjang pinggir pantainya, serta deburan ombaknya yang 
        cukup besar
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