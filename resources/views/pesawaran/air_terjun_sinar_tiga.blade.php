@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/p1.jpg" class="rounded" alt="Air Terjun Sinar Tiga" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Air Terjun Sinar Tiga</h1>
      <h2>Alamat : Desa Harapan Jaya, Kecamatan Way Ratai, Pesawaran</h2>
      <p>
        Air Terjun Sinar Tiga merupakan salah satu destinasi wisata air terjun 
        yang juga menawarkan sensasi trekking menyusuri perkebunan kopi hingga healing forest 
        di sepanjang jalurnya.
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