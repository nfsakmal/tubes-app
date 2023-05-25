@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lu4.png" class="rounded" alt="Taman Wisata Way Rarem" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Taman Wisata Way Rarem</h1>
      <h2>Alamat : Jl. Raya Way Rarem, Pekurun, Kec. Abung Pekurun, Kabupaten Lampung Utara, Lampung 34582</h2>
      <p>
        Taman Wisata Way Rarem merupakan pusat objek destinasi wisata yang berlokasi 
        di Desa Pekurun Kecamatan Abung Pekurun LAmpung Utara. Panorama Alam nan 
        termat indah berupa hamparan genangan air yang luas di waduk bendungan 
        Way Rarem yang jernih terbentang di atas permukaan tanah dengan luas 
        mencapai lebih kurang 106,10 ha.
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