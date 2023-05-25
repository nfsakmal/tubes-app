@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lu3.jpg" class="rounded" alt="Taman wisata way tebabeng" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Taman wisata way tebabeng</h1>
      <h2>Alamat : Jl. Mustafa Gani, Jagang, Kec. Blambangan Pagar, Kabupaten Lampung Utara, Lampung 35513</h2>
      <p>
        Taman Wisata Way Tebabeng di Desa Jagung, merupakan taman wisata yang 
        dijadikan sebagai target peningkatan asli daerah (PAD). Taman wisata ini berada 
        di Kabupaten Lampung Utara.
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