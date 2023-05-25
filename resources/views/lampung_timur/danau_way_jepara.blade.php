@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lti3.jpeg" class="rounded" alt="Danau Way Jepara" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Danau Way Jepara</h1>
      <h2>Alamat : Jalan Simpang Danau, Desa Sumberjo, Kecamatan Way Jepara Lampung Timur.</h2>
      <p>
        Destinasi wisata yang satu ini terletak di Desa Way Jepara. Pesonanya 
        yang damai dan airnya yang hijau memberikan kesejukan tersendiri bagi para 
        pengunjung. Belum lagi beberapa pohon hijau yang ada di sekitar danau 
        sangat asri dan terawat.
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