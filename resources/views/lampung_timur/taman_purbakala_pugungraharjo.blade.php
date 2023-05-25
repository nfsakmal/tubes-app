@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lti5.jpg" class="rounded" alt="Taman Purbakala Pugungraharjo" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Taman Purbakala Pugungraharjo</h1>
      <h2>Alamat : Pugung Raharjo, Kec. Sekampung Udik, Kabupaten Lampung Timur, Lampung 34384</h2>
      <p>
        Taman Purbakala Pugung Raharjo merupakan situs arkeologi yang terletak di 
        Desa Pugung Raharjo, Kecamatan Sekampung Udik, Kabupaten Lampung Timur, Provinsi Lampung. 
        Dari hasil penggalian dan penelitian para ahli, tinggalan di situs ini 
        cukup lengkap, yakni dari masa praaksara, periode klasik (Hindu-Buddha), hingga 
        masa Islam.

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