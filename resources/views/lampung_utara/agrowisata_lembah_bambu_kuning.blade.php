@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lu5.jpg" class="rounded" alt="Agrowisata Lembah Bambu Kuning" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Agrowisata Lembah Bambu Kuning</h1>
      <h2>Alamat : Abung Jayo, Kec. Abung Sel., Kabupaten Lampung Utara, Lampung 34517</h2>
      <p>
        Agrowisata Lembah Bambu Kuning merupakan salah satu tempat wisata di Lampung 
        Utara yang wajib dikunjungi. Tempat wisata di Lampung Agrowisata Lembah Bambu 
        Kuning terletak di Desa Abung Jayo, Kecamatan Abung Selatan, Lampung Utara. 
        Agrowisata Lembah Bambu Kuning, salah satu tempat wisaata di Lampung Utara 
        ini dibuat pada tahun 2014, berisikan tanaman jambu, rambutan dan jeruk. 
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